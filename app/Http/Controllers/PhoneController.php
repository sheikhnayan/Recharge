<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Phone;
use Illuminate\Support\Facades\Storage;
use App\Models\PhoneOrder;
use App\Models\User;
use Auth;

class PhoneController extends Controller
{
    public function PhoneOrder()
    {
        $data = Phone::where('status', 'available')->get();
        return view('front.phone-order',compact('data'));
    }

    public function SellingList()
    {
        if (Auth::user()->role == 'admin') {
            $data = PhoneOrder::join('users','users.id','phone_orders.reseller_id')
            ->select('phone_orders.*','users.nationality')
            ->get();
        }else{
        $data = PhoneOrder::where('reseller_id', Auth::user()->id)
        ->join('users','users.id','phone_orders.reseller_id')
        ->select('phone_orders.*','users.nationality')
        ->get();
        }
        return view('front.phone-selling',compact('data'));
    }

    public function AddPhoneView(Request $request)
    {
        return view('front.add-phone');
    }

    public function AddPhone(Request $request)
    {

        // dd($request->all());


        $path = $request->image->store('sim/uploads', 'public');


        $Phones = new Phone;
        $Phones->phone = $request->input('phone');        
        $Phones->price = $request->input('price');
        $Phones->dis_price = $request->input('dis_price');
        $Phones->description = $request->input('description');
        $Phones->image = $path;
        $Phones->save();

        return back()->with('status', 'Product Uploaded Successfully!');

    }

    public function order(Request $request)
    { 
        if (Auth::user()->wallet >= $request->price) {
            $add = new PhoneOrder;
            $add->reseller_id = $request->reseller_id;
            $add->phone_name = $request->phone_name;
            $add->quantity = $request->quantity;
            $add->save();

            return back()->with('status','Order Placed Successfully!');
        }else {
            return back()->with('error','Insufficient Balance!');
        }
    }

    public function updateorder(Request $request)
    {
        $info = Phone::where('phone', $request->phone_name)->first();

        $user = User::where('nationality', $request->nationality)->first();

        $past = PhoneOrder::where('id', $request->id)->first();

        $reseller_comission = ($info->dis_price/100)*$user->mobile;

        $admin_comission = ($info->dis_price/100)*$user->admin_mobile_commision;

        if ($request->status == 'sold' && $past->status != 'sold') {
            $update = User::where('nationality', $request->nationality)->update([
                'wallet' => $user->wallet - (($info->dis_price*$past->quantity) + $reseller_comission + $admin_comission)
            ]);
        }elseif ($request->status == 'cancel' && $past->status == 'sold'){
            $update = User::where('nationality', $request->nationality)->update([
                'wallet' => $user->wallet + (($info->dis_price*$past->quantity) + $reseller_comission + $admin_comission)
            ]);
        }elseif ($request->status == 'pending' && $past->status == 'sold'){
            $update = User::where('nationality', $request->nationality)->update([
                'wallet' => $user->wallet + (($info->dis_price*$past->quantity) + $reseller_comission + $admin_comission)
            ]);
        }

        $update = PhoneOrder::where('id', $request->id)->update([
            'status' => $request->status
        ]);
        
        return back()->with('status', 'Status Updated Successfully!');
    }
}
