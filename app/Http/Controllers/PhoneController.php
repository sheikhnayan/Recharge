<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Phone;

class PhoneController extends Controller
{
    public function PhoneOrder()
    {
        return view('front.phone-order');
    }

    public function SellingList()
    {
        return view('front.phone-selling');
    }

    public function AddPhoneView(Request $request)
    {
        return view('front.add-phone');
    }

    public function AddPhone(Request $request)
    {

        // dd($request->all());

        if(!empty($request->image)){

            $request->file('image')->store('public');  
            $imageName = $request->image->hashName();

        }

        $Phones = new Phone;
        $Phones->phone = $request->input('phone');        
        $Phones->price = $request->input('price');
        $Phones->description = $request->input('description');
        if(!empty($imageName)){
            $Phones->image = $imageName;
        }

        $Phones->save();

        return back()->with('status', 'Product Uploaded Successfully!');

    }
}
