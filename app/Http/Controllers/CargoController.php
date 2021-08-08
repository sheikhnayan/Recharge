<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;


class CargoController extends Controller
{
    public function NewOrderView(Request $request)
    {
        $orders = Order::where('email', 'LIKE', '%'.$request->email.'%')->get();
        // dd($orders);
        return view('front.new-order-new', compact('orders'));
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
        $orders = Order::paginate(10);
        return view('front.order-list', compact('orders'));
    }

    public function OrderTrackingView(Request $request)
    {

        $orders = Order::where('id', '=', $request->order_no)->get();
        // dd(count($ordsers));
        return view('front.order-tracking', compact('orders'));
    }

    public function OrderTracking(Request $request)
    {
        // echo "Order Tracking";
        if($request->order_no){
            $orders = Order::where('id', 'LIKE', '%'.$request->order_no.'%')->get(); 
        }
        return view('front.order-tracking', compact('orders'));

    }

    public function OrderInvoice(Request $request)
    {
        $orders = Order::where('id', 'LIKE', '%'.$request->order_no.'%')->get();
        return view('front.cargo-invoice', compact('orders'));
    }



}
