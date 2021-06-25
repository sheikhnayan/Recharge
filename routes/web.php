<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RechargeController;
use App\Http\Controllers\SimController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OfferController;
use App\Models\SimOperator;
use App\Models\User;

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
    return view('front.add-sim',compact('operator'));
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
