<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class RetailerController extends Controller
{
    public function RetailerDetail($value='')
    {
        if (Auth::user()->role == 'admin') {
            $data = User::where('role','user')->get();
        }else {
            $data = User::where('role','user')->where('created_by', Auth::user()->id)->get();
        }
        return view('front.retailer-details',compact('data'));
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
