<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;


class CargoController extends Controller
{
    public function NewOrderView(Request $request)
    {
        return view('front.new-order');
    }

    public function CreateNewOrder(Request $request)
    {
        return view('front.add-new-order');
    }

    public function OrderList($value='')
    {
        $orders = Order::all();
        return view('front.order-list', compact('orders'));
    }

    public function OrderTracking($value='')
    {
        echo "Order Tracking";
    }

    public function OrderInvoice($value='')
    {
        echo "Order Invoice";
    }

}
