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
        // dd($data);
        return view('front.retailer-details',compact('data'));
    }

    public function RetailerAction($value='')
    {
        //  SHOVON WORKS HERE
        if (Auth::user()->role == 'admin') {
            $data = User::where('role','user')->get();
        }else {
            $data = User::where('role','user')->where('created_by', Auth::user()->id)->get();
        }
        return view('front.retailer-action',compact('data'));
    }
    public function RetailerSignUp($value='')
    {
        return view('front.retailer-sign-up');
    }
    public function changeStatus(Request $request)
    {
        $user = User::find($request->user_id);
        $user->recharge_permission = $request->status;
        $user->save();
  
        return response()->json(['success'=>'Status change successfully.']);
    }
    public function changeSim(Request $request)
    {
        $user = User::find($request->user_id);
        $user->sim_permission = $request->status;
        $user->save();
  
        return response()->json(['success'=>'Status change successfully.']);
    }
    public function changeCargo(Request $request)
    {
        $user = User::find($request->user_id);
        $user->cargo_permission = $request->status;
        $user->save();
  
        return response()->json(['success'=>'Status change successfully.']);
    }
    public function changePhone(Request $request)
    {
        $user = User::find($request->user_id);
        $user->mobile_permission = $request->status;
        $user->save();
  
        return response()->json(['success'=>'Status change successfully.']);
    }
}
