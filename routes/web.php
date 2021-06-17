<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customercontroler;
use App\Http\Controllers\admin;
use App\Http\Controllers\adminDBcontroller;
use App\Http\Controllers\homePage;
use App\Http\Controllers\orderController;
//use App\Http\Controllers\sliderController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\commentController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\detailscontroller;
use App\Http\Controllers\delivaryController;
use App\Http\Controllers\delivaryloginController;

/*
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
Route::view('delivary','delivary');

Route::view('checkout','checkout');

Route::get('ordertable',[orderController::class,'show']);


Route::get('homePage',[homePage::class,'show']);
Route::view('signup','logInPage');
Route::post('signup', [Customercontroler::class, 'AddCustomer']);
//Route::view('islam', 'islam');
///////////////////////////////////////
Route::get('delivary',[delivaryController::class,'show']);
Route::view('delivary_login','delivarylogin');
Route::post('delivary_login',[delivaryloginController::class,'Delivarylogin']);



Route::view('customer_login','CustomerLogIn');

//admin route
Route::post('admin/login',[admin::class,'login']);
Route::view('admin/login','adminLogeIn');


//sgin route
Route::post('customer_login',[Customercontroler::class,'coustomerLogin']);
//////////////////////////////profile rout//////////////////////////
Route::post('/profile/{id}',[profileController::class,'newupdate']);

Route::get('/profile/{id}',[profileController::class,'show']);
//////////////////////////////details route /////////////////////////////////////
Route::view('details','details');
//Route::get('/details/{id}',[detailscontroller::class,'show']);
Route::get('details/{id}',[detailscontroller::class,'detail']);
Route::post('/details/{id}',[detailscontroller::class,'addToCartOrComment']);
Route::get('delete/{id}',[detailscontroller::class,'delete']);




//dashBord route
Route::get('/adminDashbord',[adminDBcontroller::class,'show']);
Route::post('adminDashbord',[adminDBcontroller::class,'addData']);
/////////////////////////////////delet product /////////////////////
Route::get('delete/{id}',[adminDBcontroller::class,'delete']);
Route::get('deleteOrder/{id}',[adminDBcontroller::class,'deleteOrder']);
Route::get('deleteOrder/{id}',[delivaryController::class,'deleteOrder']);
////////////////////////////apdate product/////////////////////////////////
Route::get('update/{id}',[adminDBcontroller::class,'editData']);
Route::post('update',[adminDBcontroller::class,'update']);
/////////////////////////////////update order/////////////////////
Route::get('updateOrder/{id}',[orderController::class,'editOrder']);
Route::post('/updateOrder/{id}',[orderController::class,'updateOrder']);

Route::get('homePage',[homePage::class,'show']);
Route::post('addToCart',[homePage::class,'addToCart']);
Route::get('Cart',[cartController::class,'show']);
///////////////////////////////////
Route::get('deleteCart/{id}',[cartController::class,'deleteCart']);
Route::post('/AddOrder',[cartController::class,'AddOrder']);
