<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class BalanceController extends Controller
{
    //
    public function AddBalance(Request $request)
    {
        //  FETCH SENDER INFO
        $sender_balance = User::select('wallet')->where('id',auth()->user()->id)->get();
        $sender_balance = $sender_balance[0]->wallet;
        // dd($sender_balance);

        //  FETCH RECEIVER INFO
        $user_balance = User::select('wallet')->where('id',$request->user_id)->get('wallet');
        $user_balance = $user_balance[0]->wallet;


        //  FOR ADMIN
        if(auth()->user()->role == "admin")
            {
                $users = User::find($request->user_id);
                $users->wallet = $user_balance + $request->balance;
                $users->save();
                return redirect()->back();
            }

        //  FOR USER
        if(auth()->user()->role == "user")
            if ($sender_balance > $request->balance) {

                $users = User::find($request->user_id);
                $users->wallet = $user_balance + $request->balance;
                $users->save();
                

                $senders = User::find(auth()->user()->id);
                $senders->wallet = $sender_balance - $request->balance;
                $senders->save();
                return redirect()->back();

            }
            
        return redirect()->back()->with('message','Not enough balance!');
    }
}
