<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\RechargeController;
use App\Http\Controllers\SimController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\OrderController;
use App\Models\SimOperator;
use App\Models\sim;
use App\Models\User;
use App\Models\Offer;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('front.index');
});
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

Route::get('/add-sim', function () {
    $operator = SimOperator::all();
    $user = User::where('role','user')->get();
    return view('front.add-sim',compact('operator','user'));
});

Route::post('offer-check', function(Request $request){
    $offer_detail = Offer::where('offer',$request->id)->first();
    return response()->json($offer_detail, 200);
});

Route::get('/operator', [OperatorController::class,'index']);

Route::post('/operator', [OperatorController::class,'store']);

Route::get('/delete-operator/{id}', [OperatorController::class,'destroy']);


Route::get('/offer', [OfferController::class,'index']);

Route::post('/offer', [OfferController::class,'store']);

Route::get('/delete-offer/{id}', [OfferController::class,'destroy']);

Route::get('/sim', [SimController::class,'index']);

Route::post('/add-sim', [SimController::class,'store']);

Route::get('/buy-sim/{id}', [SimController::class,'show']);

Route::post('/buy-sim', [SimController::class, 'buy']);

Route::get('/sim-orders', [SimController::class,'orders']);

Route::get('/sim-download/{id}', [SimController::class,'download']);

Route::get('/sim-invoice/{id}', [SimController::class,'invoice']);

Route::post('/sim-order/update', [SimController::class,'sim_order_update']);

//  CARGO NEW ORDER
Route::get('/cargo/new-order', [CargoController::class,'NewOrderView']);
    
    //  CREATE NEW ORDER
    Route::get('/create-new-order', [CargoController::class,'CreateNewOrder'])->name('create-new-order');

    //  SEARCH ORDERS
    Route::get('/cargo/search', [CargoController::class,'Search'])->name('search');
    
    //  TRACK ORDERS
    Route::get('/cargo/search', [CargoController::class,'OrderTracking'])->name('track');

    //  ADD NEW ORDER
    Route::POST('/cargo/add-new-order', [OrderController::class,'AddOrder'])->name('add-new-order');


//  CARGO VIEW TRACK
Route::get('/cargo/order-tracking-view', [CargoController::class,'OrderTrackingView'])->name('order-tracking-view');

Route::get('/cargo/order-list', [CargoController::class,'OrderList']);


//  CARGO ORDER TRACKING
Route::get('/cargo/order-tracking', [CargoController::class,'OrderTracking']);

//  CARGO ORDER INVOICE
Route::get('/cargo/order-invoice', [CargoController::class,'OrderInvoice']);


Route::get('/logout', function(){
    If(Auth::check()){
        Auth::logout();
    }else{

    }
    return redirect('/');
});

Route::post('/check-operator',[RechargeController::class,'check_operator']);
// edit by shuvo
Route::get('/fcm', [RechargeController::class,'fcmSend']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
