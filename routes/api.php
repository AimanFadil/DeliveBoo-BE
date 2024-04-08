<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Api\RestaurantController as RestaurantController;

use App\Http\Controllers\Api\TypologyController as TypologyController;

use App\Http\Controllers\Api\DisheController as DisheController;

use App\Http\Controllers\Api\Orders\OrderController as OrderController;

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

Route::get('/restaurant', [RestaurantController::class, 'index']);
Route::get('/restaurant/menu/{id}', [DisheController::class, 'index']);
Route::get('/restaurant/{id}', [RestaurantController::class, 'show']);
Route::get('/typology', [TypologyController::class, 'index']);

Route::post('/restaurant/mail', [RestaurantController::class, 'mails']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('orders/generate',[OrderController::class, 'generate']);
Route::post('orders/makePayment',[OrderController::class, 'makePayment']);
Route::post('orders/customer',[OrderController::class, 'customer']);