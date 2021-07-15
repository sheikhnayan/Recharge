<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        echo "OrderList";
        return view('front.order-list');
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
