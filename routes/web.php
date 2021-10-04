<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\RechargeController;
use App\Http\Controllers\PinController;
use App\Http\Controllers\SimController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\RetailerController;
use App\Http\Controllers\BalanceController;
use App\Models\SimOperator;
use App\Models\sim;
use App\Models\User;
use App\Models\Offer;
use App\Models\Phone;
use App\Models\DomesticProduct;
use App\Models\DomesticProfit;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/sign-up',[UserController::class,'index']);

Route::post('/create',[UserController::class,'create'])->name('create');

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    $data = Phone::where('status', 'available')->get();
    return view('front.index',compact('data'));
})->name('/');
Route::get('/add-reseller', function () {
    return view('front.add-reseller');
});

Route::get('/reseller/edit/{id}',[UserController::class,'edit']);

Route::get('/reseller/delete/{id}',[UserController::class,'destroy']);

Route::post('/reseller/update/{id}',[UserController::class,'update']);

Route::get('/resellers', function () {
    if(Auth::user()->role == 'admin')
    $show = User::where('role','user')->get();
    else{
        $show = User::where('role','user')->where('created_by',Auth::user()->id)->get();
    }
    return view('front.reseller',compact('show'));
});

Route::get('/recharge', function () {
    return view('front.recharge');
});

// Route::get('/sim', function () {
//     return view('front.sim');
// });

Route::post('offer-check', function(Request $request){
    $offer_detail = Offer::where('offer',$request->id)->first();
    return response()->json($offer_detail, 200);
})->name('offer-check');

Route::get('offer-edit/{id}', function($id){
    $operator = SimOperator::all();
    $offer_detail = Offer::where('id',$id)->first();
    return view('front.offer-edit',compact('offer_detail','operator'));
});

Route::post('check-products', function(Request $request){
    $offer_detail = DomesticProduct::where('product', 'like', '%'.$request->id.'%')->where('type','recharge')->get();
    return response()->json($offer_detail, 200);
});
Route::post('check-pins', function(Request $request){

    if($request->id == 'EA')
    {
        $offer_detail = DB::table('domestic_pins')->where('operator', $request->id)->where('type','pin')->get(); 
    }else {
        $offer_detail = DB::table('domestic_pins')->where('operator', 'like', '%'.$request->id.'%')->where('type','pin')->get();
    }
    return response()->json($offer_detail, 200);
});

Route::get('/operator', [OperatorController::class,'index']);

Route::post('/operator', [OperatorController::class,'store']);

Route::get('/delete-operator/{id}', [OperatorController::class,'destroy']);


Route::get('/offer', [OfferController::class,'index']);

Route::post('/offer', [OfferController::class,'store']);

Route::post('/offer-update/{id}', [OfferController::class,'update']);

Route::get('/delete-offer/{id}', [OfferController::class,'destroy']);

Route::post('/add-sim', [SimController::class,'store']);

Route::get('/buy-sim/{id}', [SimController::class,'show']);

Route::post('/buy-sim', [SimController::class, 'buy']);

Route::get('/sim-orders', [SimController::class,'orders']);

Route::get('/sim-download/{id}', [SimController::class,'download']);

Route::get('/sim-invoice/{id}', [SimController::class,'invoice']);

Route::post('/sim-order/update', [SimController::class,'sim_order_update']);

//  CARGO NEW ORDER
Route::get('/cargo/new-order', [CargoController::class,'NewOrderView'])->name('cargo-new-order');
    
    //  CREATE NEW ORDER
    Route::get('/create-new-order', [CargoController::class,'CreateNewOrder'])->name('create-new-order');

    //  SEARCH ORDERS
    Route::get('/cargo/search', [CargoController::class,'Search'])->name('search');
    
    //  TRACK ORDERS
    Route::get('/cargo/track', [CargoController::class,'OrderTracking'])->name('track');

    //  ADD NEW ORDER
    Route::POST('/cargo/add-new-order', [OrderController::class,'AddOrder'])->name('add-new-order');


//  CARGO VIEW TRACK
Route::get('/cargo/order-tracking-view', [CargoController::class,'OrderTrackingView'])->name('order-tracking-view');

Route::get('/cargo/order-list', [CargoController::class,'OrderList'])->name('order-list');


//  CARGO ORDER TRACKING
Route::get('/cargo/order-tracking', [CargoController::class,'OrderTracking'])->name('order-tracking');

//  CARGO ORDER INVOICE
Route::get('/cargo/order-invoice/{id}', [CargoController::class,'OrderInvoice'])->name('order-invoice-view');

// CARGO ORDER VIEW
Route::get('/cargo/order/view/{id}', [CargoController::class,'OrderView']);

// CARGO ORDER cancel
Route::get('/cargo/order/cancel/{id}', [CargoController::class,'OrderCancel']);

//  PHONE START

Route::get('/phone/phone-order', [PhoneController::class,'PhoneOrder'])->name('phone-order');

Route::get('/phone/selling-list', [PhoneController::class,'SellingList'])->name('selling-list');

Route::get('/phone/add-phone-view', [PhoneController::class,'AddPhoneView'])->name('add-phone-view');

Route::post('/phone/add-phone', [PhoneController::class,'AddPhone'])->name('add-phone');

Route::post('/phone/order', [PhoneController::class,'order'])->name('add-order');

Route::post('/phone/update', [PhoneController::class,'updateorder'])->name('update-order');


//  PHONE END

//  RECHARGES START

Route::get('domestic_product', function () {
    if(Auth::check()){
    if(Auth::user()->role == 'admin'){
        return view('front.add-domestic');
    }else{
        return back();
    }
    }else{
        return redirect('login');
    }
});

Route::post('/domestic_product', function (Request $request) {
    $add = new DomesticProfit;
    $add->ean = $request->ean;
    $add->commission = $request->commission;
    $add->save();

    return back();

});

Route::get('/recharge/recharge-int', [RechargeController::class,'RechargeInt'])->name('recharge-int');

Route::get('/recharge/all-invoice', [RechargeController::class,'invoices'])->name('recharge-invoice');

Route::get('/pin/all-invoice', [PinController::class,'invoices'])->name('pin-invoice');

Route::post('/filebytype',[RechargeController::class,'filebytype']);

Route::get('/filebydate/{start}/{end}',[RechargeController::class,'filebydate']);

Route::get('/pinfilebydate/{start}/{end}',[RechargeController::class,'pinfilebydate']);

Route::get('/recharge/recharge-italy', [RechargeController::class,'RechargeDom'])->name('recharge-italy');

Route::get('/recharge/pin-italy', [PinController::class,'index']);

Route::get('/recharge/recharge-gift-card', [RechargeController::class,'RechargeGiftCard'])->name('recharge-gift-card');

Route::get('/recharge/recharge-calling-card', [RechargeController::class,'RechargeCallingCard'])->name('recharge-calling-card');

Route::get('/recharge/print-all-invoice', [RechargeController::class,'PrintInvoice'])->name('print-all-invoice');

Route::get('changeStatus', [RetailerController::class,'changeStatus']);

Route::get('changeSim', [RetailerController::class,'changeSim']);

Route::get('changeCargo', [RetailerController::class,'changeCargo']);

Route::get('changePhone', [RetailerController::class,'changePhone']);

Route::get('changeReseller', [RetailerController::class,'changeReseller']);

Route::get('changePin', [RetailerController::class,'changePin']);


//  RECHARGES END

//  SIMS START

Route::get('/sim/sim-activation', [SimController::class,'index'])->name('sim-activation');

Route::get('/sim/sim-selling', [SimController::class,'orders'])->name('sim-selling');

Route::get('/sim/wi-fi', [SimController::class,'WiFi'])->name('wi-fi');

//  SIMS END

//  RETAILER START

Route::get('/retailer/retailer-details', [RetailerController::class,'RetailerDetail'])->name('retailer-details');

Route::get('/retailer/retailer-sign-up', [RetailerController::class,'RetailerSignUp'])->name('retailer-sign-up');

Route::get('/retailer/retailer-action', [RetailerController::class,'RetailerAction'])->name('retailer-action');


//  RETAILER END

Route::get('/logout', function(){
    If(Auth::check()){
        Auth::logout();
    }else{

    }
    return redirect('/');
});

Route::post('/check-operator',[RechargeController::class,'check_operator']);
Route::get('/change-operator/{numbers}/{rg}',[RechargeController::class,'change_operator']);
Route::post('/get-price',[RechargeController::class,'get_price']);
Route::post('/check-product',[RechargeController::class,'get_product']);
Route::post('/recharge/estimate',[RechargeController::class,'estimate']);
Route::post('/check-changed-product',[RechargeController::class,'get_changed_product']);
Route::post('/international_recharge',[RechargeController::class,'recharge']);
Route::post('/recharge/estimated',[RechargeController::class,'estimate']);
Route::post('/domestic_recharge',[RechargeController::class,'domestic_recharge']);
Route::post('/domestic_pin',[PinController::class,'store']);
Route::get('/recharge_invoice/{id}',[RechargeController::class,'invoice']);
Route::get('/pin_invoice/{id}',[PinController::class,'invoice']);
// edit by shuvo
Route::get('/fcm', [RechargeController::class,'fcmSend']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::post('/add_balance',[BalanceController::class,'AddBalance'])->name('AddBalance');


Route::post('/edit_balance',[BalanceController::class,'EditBalance'])->name('EditBalance');

Route::get('/change-phone-price', [BalanceController::class,'PriceDiscount']);

Route::post('/edit_wallet',[BalanceController::class,'edit_wallet']);

Route::post('/add_com',[RetailerController::class,'AddCom'])->name('AddCom');

Route::post('/cargo_update',[OrderController::class,'update_status']);

