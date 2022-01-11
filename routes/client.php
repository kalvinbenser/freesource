<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\RazorpayController;
use App\Http\Controllers\MailController;
Route::post('/send_contact',[MailController::class,'send_contact']);

Route::get('/',[ClientController::class,'index']);
Route::get('/contact_us',[ClientController::class,'contact_us']);
//Route::post('/send_contact',[ClientController::class,'send_contact']);
Route::get('/how_to_order',[ClientController::class,'how_to_order']);
Route::get('/product/{id}',[ClientController::class,'product']);
Route::get('/privacy_policy',[ClientController::class,'privacy_policy']);
Route::get('/request_for_code',[ClientController::class,'request_for_code']);
Route::get('/terms_and_condition',[ClientController::class,'terms_and_condition']);
Route::get('/user_dashboard',[ClientController::class,'user_dashboard']);

Route::get('/matlab',[ClientController::class,'matlab']);

Route::get('/java',[ClientController::class,'java']);


Route::get('/python',[ClientController::class,'python']);
//cart
Route::get('/cart',[ClientController::class,'cart']);
Route::get('/add_cart/{id}',[ClientController::class,'add_cart']);

Route::get('/delete_cart/{id}',[ClientController::class,'delete_cart']);





//search

Route::post('/search',[ClientController::class,'search']);

//razorpay
Route::post('/payment',[ClientController::class,'payment'])->name('payment');


//checkout
Route::get('/checkout/{id}',[ClientController::class,'checkout']);

Route::get('razorpay/{id}', [RazorpayController::class,'payWithRazorpay'])->name('paywithrazorpay');
Route::post('paymentRazor', [RazorpayController::class,'paymentRazor'])->name('paymentRazor');

Route::get('checkout_view/{id}', [RazorpayController::class,'checkout_view']);
//paypal
Route::post('paymentPaypal', [RazorpayController::class,'paymentPaypal']);

Route::get('myorder', [ClientController::class,'myorder']);
Route::get('myorder_view/{id}', [ClientController::class,'myorder_view']);


Route::get('profile_view', [ClientController::class,'profile_view']);
