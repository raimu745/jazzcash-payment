<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\JazzController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[JazzController::class,'index']);
Route::get('/checkout/{product_id}',[CheckoutController::class,'index']);
Route::post('/checkout',[CheckoutController::class,'docheckout']);
Route::post('/paymentStatus',[CheckoutController::class,'paymentStatus']);
