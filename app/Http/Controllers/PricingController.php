<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrderRatings;

class PricingController extends Controller
{
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
        $prices->ef_2 = $request->input('ef_1');
        $prices->total = $request->input('total');
        $prices->save();

        return back()->with('status', 'Order Created Successfully!');
    }
}
