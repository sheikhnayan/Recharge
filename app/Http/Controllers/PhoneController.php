<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function PhoneOrder()
    {
        return view('front.phone-order');
    }

    public function SellingList()
    {
        return view('');
    }
}
