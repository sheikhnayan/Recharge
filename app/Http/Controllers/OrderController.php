<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;


class OrderController extends Controller
{
    public function AddOrder(Request $request)
    {

        dd($request->all());


        $validatedData = $request->validate([
            'first_name' => 'required|max:255',
            'name' => 'required',
            'phone_number' => 'required',
            'dob' => 'required',
        ]);

        $orders = new Order;
        $orders->first_name = $request->input('first_name');        
        $orders->surname = $request->input('surname');
        $orders->dob = $request->input('dob');
        $orders->document_number = $request->input('document_number');
        $orders->phone = $request->input('phone');
        $orders->email = $request->input('email');
        $orders->dob = $request->input('dob');
        $orders->address = $request->input('address');
        $orders->cap = $request->input('cap');
        $orders->country = $request->input('country');
        $orders->state = $request->input('state');
        $orders->dist = $request->input('dist');
        $orders->city = $request->input('city');
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
        $orders->product = $request->input('product');
        $orders->qty = $request->input('qty');
        $orders->save();

        return back()->with('status', 'Product Updated Successfully!');      
    }
}
