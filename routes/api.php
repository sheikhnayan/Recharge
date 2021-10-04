<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RechargeController;
use App\Models\Offer;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/recharge', [RechargeController::class,'index']);

// edit by shuvo
Route::post('/send', [RechargeController::class,'fcmSend']);

Route::post('/operator', [RechargeController::class,'operator']);

Route::post('/response', [RechargeController::class,'response']);

Route::post('offer-check', function(Request $request){
    $offer_detail = Offer::where('offer',$request->id)->first();
    return response()->json($offer_detail, 200);
});