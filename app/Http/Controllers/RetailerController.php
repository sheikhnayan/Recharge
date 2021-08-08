<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RetailerController extends Controller
{
    public function RetailerDetail($value='')
    {
        return view('front.retailer-details');
    }

    public function RetailerAction($value='')
    {
        return view('front.retailer-action');
    }
    public function RetailerSignUp($value='')
    {
        return view('front.retailer-sign-up');
    }
}
