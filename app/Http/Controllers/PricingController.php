<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrderRatings;

class PricingController extends Controller
{
    public function PricingTab(Request $request)
    {
        $orders = OrderRatings::paginate(10);

        return view('front.price-list',compact('orders'));


        // $prices->type = $request->input('type'); 
        // $prices->weight_start = $request->input('weight_start');        
        // $prices->weight_end = $request->input('weight_end');        
        // $prices->charge_for_weight = $request->input('charge_for_weight');
        // $prices->charge_for_country = $request->input('charge_for_country');
        // $prices->ef_2 = $request->input('ef_1');
        // $prices->total = $request->input('total');
        // $prices->save();

        // return back()->with('status', 'Order Created Successfully!');
    }

    public function Pricing()
    {
        return view('front.add-pricing');
    }

    public function AddPricing(Request $request)
    {
        $prices = new OrderRatings;
        $prices->type = $request->input('type'); 
        $prices->weight_start = $request->input('weight_start');        
        $prices->weight_end = $request->input('weight_end');        
        $prices->charge_for_weight = $request->input('charge_for_weight');
        $prices->charge_for_country = $request->input('charge_for_country');
        $prices->country_name = $request->input('country_name');
        $prices->status = $request->input('status');
        $prices->total = $request->input('total');
        $prices->save();

        return back()->with('status', 'Price Created Successfully!');
    }
    
    public function EditPricing($id)
    {

        $orders = OrderRatings::find($id);
        // dd($orders);
        return view('front.edit-pricing',compact('orders'));
        
    }
    public function EditPricingForReal(Request $request, $id)
    {
        $prices = OrderRatings::find($id); ;
        $prices->type = $request->input('type'); 
        $prices->weight_start = $request->input('weight_start');        
        $prices->weight_end = $request->input('weight_end');        
        $prices->charge_for_weight = $request->input('charge_for_weight');
        $prices->charge_for_country = $request->input('charge_for_country');
        $prices->country_name = $request->input('country_name');
        $prices->status = $request->input('status');
        $prices->total = $request->input('total');
        $prices->save();

        return back()->with('status', 'Price Edited Successfully!');
    }
    public function DeletePricing($id)
    {
        OrderRatings::where('id', $id)->delete();
        return back();
    }

    public function SendPricing(Request $request)
    {
        $data = OrderRatings::where('country_name', '=', $request->country)->where('weight_start', '<=', $request->weight)->where('weight_end', '>=', $request->weight)->get('total');
        $data = $data[0]->total;
        return response($data);
    }

    public function SendPricingForDocs(Request $request)
    {
        $data = OrderRatings::where('country_name', '=', $request->country)->where('type', '=', $request->type)->get('total');
        $data = $data[0]->total;
        return response($data);
    }
}
