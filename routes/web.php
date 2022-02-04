<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; 
use App\Http\Controllers\ProductController; 


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
URL::forceRootUrl('http://studenti.sum.ba/projekti/rwa/2022/g20');

Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    Session::forget('user');
    //$req->session()->flush();
    return redirect('/login');
    

});
Route::any('single', function () {
    
});
Route::view('/register','register');
Route::view('/admindas','admindas');
Route::view('/master','master');


Route::view('/administratordas','administratordas');
Route::post('/admregister', [UserController::class,'admregister']);
Route::post('/addproduct', [ProductController::class,'addproduct']);
Route::post('/login', [UserController::class,'login']);
Route::post('/register', [UserController::class,'register']);
Route::get('/', [ProductController::class,'product']);
Route::get('detail/{id}', [ProductController::class,'detail']);
Route::get('search', [ProductController::class,'search']);
Route::post('add_to_cart', [ProductController::class,'addToCart']);
Route::get('cartlist', [ProductController::class,'cartList']);
Route::get('removecart/{id}', [ProductController::class,'removeCart']);
Route::get('ordernow', [ProductController::class,'orderNow']);
Route::post('orderplace', [ProductController::class,'orderPlace']);
Route::get('single', [ProductController::class,'single']);
Route::get('index', [ProductController::class,'index']);








