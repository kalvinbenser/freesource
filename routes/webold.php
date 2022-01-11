<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\MailController;


Route::get('/search',[FrontendController::class,'search']);


//mail

Route::post('/send_contact',[MailController::class,'send_contact']);




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

use App\Http\Controllers\RazorpayController;

//default
Route::post('store', [RazorpayController::class,'store']);
Route::get('single_razorpay/{id}', [RazorpayController::class,'single_razorpay']);
Route::get('multiple_razorpay', [RazorpayController::class,'multiple_razorpay']);

//customize

// Route::get('razorpay', [RazorpayController::class,'razorpay']);
// Route::get('razorpay_payment', [RazorpayController::class,'payment'])->name('payment');



Route::get('/',[FrontendController::class,'index']);

Route::get('/dashboard',[FrontendController::class,'dashboard']);
Route::get('/user_dashboard',[FrontendController::class,'user_dashboard']);

Route::get('/product/{id}',[FrontendController::class,'product']);

Route::get('/matlab',[FrontendController::class,'matlab']);

Route::get('/java',[FrontendController::class,'java']);

Route::get('/python',[FrontendController::class,'python']);
//add carts

Route::get('/add_cart/{id}',[FrontendController::class,'add_cart']);
Route::get('/cart_view',[FrontendController::class,'cart_view']);

Route::get('/delete_cart/{id}',[FrontendController::class,'delete_cart']);


//check out
Route::get('/checkout_view/{id}',[FrontendController::class,'checkout_view']);
Route::get('/checkout_view_all',[FrontendController::class,'checkout_view_all']);
//contact us
Route::get('/contact_us',[FrontendController::class,'contact_us']);

Route::post('/send_contact_us',[FrontendController::class,'send_contact_us']);


Route::get('/shopnow',[FrontendController::class,'shopnow']);

//terms

Route::get('/how_to_order',[FrontendController::class,'how_to_order']);
Route::get('/terms_and_condition',[FrontendController::class,'terms_and_condition']);
Route::get('/privacy_policy',[FrontendController::class,'privacy_policy']);
Route::get('/request_for_code',[FrontendController::class,'request_for_code']);



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
