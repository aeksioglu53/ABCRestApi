<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Passport\Passport;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

//Route::group(['middleware' => ''], function () {
//
//});

Passport::routes(NULL, ['prefix' => 'api/v1/oauth']);
Route::group(['prefix' => 'v1', 'middleware' => 'auth:api'], function () {

    Route::post('orders', [\App\Http\Controllers\OrderController::class, 'create']);
    Route::get('orders', [\App\Http\Controllers\OrderController::class, 'store']);
    Route::put('orders/{orderId}', [\App\Http\Controllers\OrderController::class, 'put']);
    Route::get('orders/{orderId}', [\App\Http\Controllers\OrderController::class, 'get']);

});
