<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use Auth;


class OrderController extends Controller
{
    public function AddOrder(Request $request)
    { 
        $ordeaars = Order::all();
        $ooyeh = count($ordeaars);
        $randomNumber = $ooyeh.random_int(1000, 9999).$ooyeh;
        if (Auth::user()->wallet >= $request->total) {
            // dd($request->all());

        if(!empty($request->label)){
            $request->file('label')->store('public');  
            $labelFileName = $request->label->hashName();
        }


        $validatedData = $request->validate([
            // 'first_name' => 'required|max:255',
            // 'rfirst_name' => 'required',
            // 'surname' => 'required',
            // 'rsurname' => 'required',
            // 'dob' => 'required',
            // 'rdob' => 'required',
            // 'document_number' => 'required',
            // 'rdocument_number' => 'required',
            // 'phone' => 'required',
            // 'rphone' => 'required',
            // 'email' => 'required',
            // 'remail' => 'required',
            // 'address' => 'required',
            // 'raddress' => 'required',
            // 'country' => 'required',
            // 'rcountry' => 'required',
            // 'state' => 'required',
            // 'rstate' => 'required',
            // 'dist' => 'required',
            // 'rdist' => 'required',
            // 'city' => 'required',
            // 'rcity' => 'required',
            // 'phone_number' => 'required',
            // 'phone_number' => 'required',
            // 'phone_number' => 'required',
            // 'phone_number' => 'required',
            // 'phone_number' => 'required',
            // 'phone_number' => 'required',
            // 'phone_number' => 'required',
            // 'phone_number' => 'required',
            // 'phone_number' => 'required',
            // 'phone_number' => 'required',
            // 'phone_number' => 'required',
            // 'phone_number' => 'required',
            // 'phone_number' => 'required',
            // 'phone_number' => 'required',
            // 'phone_number' => 'required',
            // 'phone_number' => 'required',
            // 'phone_number' => 'required',
            // 'phone_number' => 'required',
            // 'phone_number' => 'required',
            // 'phone_number' => 'required',
            // 'phone_number' => 'required',
            // 'phone_number' => 'required',
            // 'phone_number' => 'required',
            // 'phone_number' => 'required',
            // 'phone_number' => 'required',

        ]);

        $orders = new Order;
        $orders->reseller_id = $request->input('reseller_id'); 
        $orders->first_name = $request->input('first_name');        
        $orders->rfirst_name = $request->input('rfirst_name');        
        $orders->surname = $request->input('surname');
        $orders->rsurname = $request->input('rsurname');
        $orders->dob = $request->input('dob');
        $orders->rdob = $request->input('rdob');
        $orders->document_number = $request->input('document_number');
        $orders->rdocument_number = $request->input('rdocument_number');
        $orders->phone = $request->input('phone');
        $orders->rphone = $request->input('rphone');
        $orders->email = $request->input('email');
        $orders->remail = $request->input('remail');
        $orders->address = $request->input('address');
        $orders->raddress = $request->input('raddress');
        $orders->ran_id = $randomNumber;
        
        $orders->country = $request->input('country');
        $orders->rcountry = $request->input('rcountry');
        $orders->state = $request->input('state');
        $orders->rstate = $request->input('rstate');
        $orders->dist = $request->input('dist');
        $orders->rdist = $request->input('rdist');
        $orders->city = $request->input('city');
        $orders->rcity = $request->input('rcity');
        $orders->expected_date_to_receive = $request->input('expected_date_to_receive');
        $orders->delivery_condition = $request->input('delivery_condition');
        $orders->numberOfBox = $request->input('numberOfBox');
        $orders->goods_value = $request->input('goods_value');
        $orders->productType = $request->input('productType');
        $orders->weight = $request->input('weight');
        $orders->perKg = $request->input('perKg');
        $orders->cusCharge = $request->input('cusCharge');
        $orders->homeDeliveryCharge = $request->input('homeDeliveryCharge');
        $orders->addiCharge = $request->input('addiCharge');
        $orders->total = $request->input('total');
        $orders->agent_comm = $request->input('agent_comm');
        $orders->delivery_way = $request->input('delivery_way');
        $orders->departure_airport = $request->input('departure_airport');
        $orders->arrival_airport = $request->input('arrival_airport');
        $orders->product1 = $request->input('product1');
        $orders->product2 = $request->input('product2');
        $orders->product3 = $request->input('product3');
        $orders->product4 = $request->input('product4');
        $orders->product5 = $request->input('product5');
        $orders->quantity1 = $request->input('qty1');
        $orders->quantity2 = $request->input('qty2');
        $orders->quantity3 = $request->input('qty3');
        $orders->quantity4 = $request->input('qty4');
        $orders->quantity5 = $request->input('qty5');
        if(!empty($labelFileName)){
            $orders->label = $labelFileName;
        }
        $orders->status = 'available';
        $orders->save();

        return back()->with('status', 'Order Created Successfully!');
        }else{
            return back()->with('error', 'Insufficient Balace!');    
        }      
    }

    public function update_status(Request $request)
    {

        if(Auth::user()->role != 'admin')
        {
        $info = Order::where('id', $request->id)->first();

        $user = User::where('id', $request->reseller_id)->first();

        $past = Order::where('id', $request->id)->first();

        $reseller_comission = ($info->total/100)*$user->cargo;

        $admin_comission = ($info->total/100)*$user->admin_cargo_commision;

        // if ($request->status == 'confirmed' && $past->status != 'confirmed') {
        //     $update = User::where('id', $request->reseller_id)->update([
        //         'wallet' => $user->wallet - ($info->total + $reseller_comission + $admin_comission)
        //     ]);
        // }elseif ($request->status == 'cancel' && $past->status == 'confirm'){
        //     $update = User::where('id', $request->reseller_id)->update([
        //         'wallet' => $user->wallet + ($info->total + $reseller_comission + $admin_comission)
        //     ]);
        // }elseif ($request->status == 'pending' && $past->status == 'confirmed'){
        //     $update = User::where('id', $request->reseller_id)->update([
        //         'wallet' => $user->wallet + ($info->total + $reseller_comission + $admin_comission)
        //     ]);
        // }elseif ($request->status == 'received' && $past->status == 'pending'){
        //     $update = User::where('id', $request->reseller_id)->update([
        //         'wallet' => $user->wallet - ($info->total + $reseller_comission + $admin_comission)
        //     ]);
        // }elseif ($request->status == 'received' && $past->status == 'cancel'){
        //     $update = User::where('id', $request->reseller_id)->update([
        //         'wallet' => $user->wallet - ($info->total + $reseller_comission + $admin_comission)
        //     ]);
        // }
        }

        $update = Order::where('id', $request->id)->update([
            'status' => $request->status
        ]);

        return back()->with('status', 'Status Updated Successfully!');
    }
}
