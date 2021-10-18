<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Phone;
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
        $user_due = User::select('due')->where('id',$request->user_id)->get('due');
        $user_due = $user_due[0]->due;


        if($request->balance){
            //  FOR ADMIN
            if(auth()->user()->role == "admin"){
                {
                    $users = User::find($request->user_id);
                    $users->wallet = $user_balance + $request->balance;
                    $users->save();
                    return redirect()->back();
                }
            }

            //  FOR USER
            if(auth()->user()->role == "user"){
                if ($sender_balance > $request->balance) {

                    $users = User::find($request->user_id);
                    $users->wallet = $user_balance + $request->balance;
                    $users->save();
                    

                    $senders = User::find(auth()->user()->id);
                    $senders->wallet = $sender_balance - $request->balance;
                    $senders->save();
                    return redirect()->back();

                }
            }
        }


        if($request->due){
            //  FOR ADMIN
            if(auth()->user()->role == "admin"){
                {
                    $users = User::find($request->user_id);
                    $users->wallet = $user_balance + $request->due;
                    $users->due = $user_due + $request->due;
                    $users->save();
                    return redirect()->back();
                }
            }

            //  FOR USER
            if(auth()->user()->role == "user"){
                if ($sender_balance > $request->balance) {

                    $users = User::find($request->user_id);
                    $users->wallet = $user_balance + $request->balance;
                    $users->due = $request->due;
                    $users->save();
                    

                    $senders = User::find(auth()->user()->id);
                    $senders->wallet = $sender_balance - $request->balance;
                    $senders->save();
                    return redirect()->back();

                }
            }
        }
        return redirect()->back()->with('message','Not enough balance!');
    }

    public function EditBalance(Request $request){

        $info = User::where('id', $request->user_id)->first();

        if($info->due >= $request->due){
            $user = User::where('id', $request->user_id)->update([

                "due" => $info->due - $request->due
                
            ]);

            return back();
        }else{
            return back()->with('error','Due Amount Is Less Than The Input');
        }
    }

    public function EditDue(Request $request){

        $info = User::where('id', $request->user_id)->first();

        if($info->cargo_due >= $request->due){
            $user = User::where('id', $request->user_id)->update([

                "cargo_due" => $info->cargo_due - $request->due
                
            ]);

            return back();
        }else{
            return back()->with('error','Due Amount Is Less Than The Input');
        }
    }

    public function AddDue(Request $request){

        $info = User::where('id', $request->user_id)->first();


            $user = User::where('id', $request->user_id)->update([

                "cargo_due" => $info->cargo_due + $request->due
                
            ]);

            return back();
    }

    public function PriceDiscount(Request $request)
    {
        $phone = Phone::find($request->user_id);
        $phone->discount_status = $request->status;
        $phone->save();
  
        return response()->json(['success'=>'Status change successfully.']);
    }




    public function edit_wallet(Request $request){


        $user = User::where('id', $request->user_id)->update([

            "wallet" => $request->balance,
                
        ]);

        return back()->with('status','Balance Updated Successfully!');




    }
}
