<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/test',[AdminController::class,'test']);
Route::get('/dashboard',[AdminController::class,'index'])->middleware(['auth']);

Route::get('/user_profile_view',[AdminController::class,'user_profile_view'])->middleware(['auth']);

Route::get('/get_user',[AdminController::class,'get_user'])->middleware(['auth']);

Route::get('/products_view',[AdminController::class,'products_view'])->middleware(['auth']);
Route::get('/add_product_view',[AdminController::class,'add_product_view'])->middleware(['auth']);
Route::get('/edit_product_view/{id}',[AdminController::class,'edit_product_view'])->middleware(['auth']);
Route::post('/create_product',[AdminController::class,'create_product']);
Route::get('/view_product/{id}',[AdminController::class,'view_product'])->middleware(['auth']);

Route::post('/image-upload', [AdminController::class, 'fileUpload']);
//product action

Route::get('/product_detail_view',[AdminController::class,'product_detail_view'])->middleware(['auth']);

Route::get('/delete_product/{id}',[AdminController::class,'delete_product'])->middleware(['auth']);
Route::get('/delete_more_image/{id}',[AdminController::class,'delete_more_image'])->middleware(['auth']);
Route::post('/update_product',[AdminController::class,'update_product']);

//category_view


Route::get('/category_view',[AdminController::class,'category_view'])->middleware(['auth'])->middleware(['auth']);

Route::post('/create_category',[AdminController::class,'create_category']);


Route::get('/edit_category_view/{id}',[AdminController::class,'edit_category_view'])->middleware(['auth']);

Route::post('/update_category',[AdminController::class,'update_category']);

Route::get('/delete_category/{id}',[AdminController::class,'delete_category'])->middleware(['auth']);

Route::get('/delete_report/{id}',[AdminController::class,'delete_report'])->middleware(['auth']);


//reports

Route::get('/reports_view',[AdminController::class,'reports_view'])->middleware(['auth']);
Route::get('/payments_view',[AdminController::class,'payments_view'])->middleware(['auth']);

Route::get('/edit_payment/{id}',[AdminController::class,'edit_payment'])->middleware(['auth']);

Route::post('update_payment',[AdminController::class,'update_payment']);
