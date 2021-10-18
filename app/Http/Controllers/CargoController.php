<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\OrderRatings;
use Auth;


class CargoController extends Controller
{
    public function NewOrderView(Request $request)
    {
        $orders = Order::where('email', 'LIKE', '%'.$request->email.'%')->get();
        $OrderRatings = OrderRatings::all();
        // dd($OrderRatings);
        // dd($orders);
        return view('front.new-order-new', compact('orders','OrderRatings'));
    }

    public function Search(Request $request)
    {
        // dd($request->email);
        if($request->email) {
            $orders = Order::where('email', 'LIKE', '%'.$request->email.'%')->paginate(10);
            // dd($orders);
        }
        if (empty($request->email)) {
            $orders = Order::all();
        }

        return view('front.order-list', compact('orders'));
    }

    public function CreateNewOrder(Request $request)
    {
        return view('front.add-new-order');
    }

    public function OrderList($value='')
    {
        if(Auth::user()->role == 'admin'){
            $orders = Order::paginate(10);
        }else{
            $orders = Order::where('reseller_id', Auth::user()->id)->paginate(10);
        }
        return view('front.order-list', compact('orders'));
    }

    public function OrderTrackingView(Request $request)
    {

        if(Auth::user()->role == 'admin'){
            $orders = Order::where('ran_id', '=', $request->order_no)->get();
        }else{
            $orders = Order::where('ran_id', '=', $request->order_no)->where('reseller_id', Auth::user()->id)->get();
        }
        // dd($orders);
        return view('front.order-tracking', compact('orders'));
    }

    public function OrderTracking(Request $request)
    {
        // echo "Order Tracking";
        if($request->order_no){
            if (Auth::user()->role == 'admin') {
                $orders = Order::where('ran_id', 'LIKE', '%'.$request->order_no.'%')->get();
                // dd($orders);
                if (count($orders) > 0) {
                    $agent = User::where('id', $orders[0]->reseller_id)->first();
                }else $agent = "";

                return view('front.order-tracking', compact('orders','agent'));
            }else {
                $orders = Order::where('ran_id', 'LIKE', '%'.$request->order_no.'%')->where('reseller_id', Auth::user()->id)->get();

                $count = $orders->count();
                if($count > 0){
                    $agent = User::where('id', $orders['0']->reseller_id)->first(); 
                }else {
                    $agent['nationality'] = null; 
                }
            }
            
        }
        return view('front.order-tracking', compact('orders','agent'));

    }

    public function OrderInvoice($id)
    {
        $order = Order::where('id', $id)->first();
        
        $agent = User::where('id', $order->reseller_id)->first();

        return view('front.cargo-invoice', compact('order','agent'));
    }

    public function OrderView($id)
    {
        $data = Order::where('id', $id)->first();

        $agent = User::where('id', $data->reseller_id)->first();

        return view('front.cargo_view_order',compact('data','agent'));

    }

    public function OrderCancel($id)
    {
        Order::where('id', $id)->delete();

        return back();

    }

    public function Orderlabel(Request $request)
    {
        $request->file('label')->store('public');  
        $labelFileName = $request->label->hashName();

        $update = Order::where('id',$request->id)->update([
            'label' => $labelFileName
        ]);

        return back()->with('success', "Label Updated Successfully!");

    }



}
