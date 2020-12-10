<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Products;
use App\Models\Order;
use App\Models\User;


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
// APIs Users : GET POST PUT DELETE
Route::resource('users', 'UserController');

// APIs Products : GET POST PUT DELETE ====== OK
Route::resource('products', 'ProductsController');

// APIs Orders : GET POST PUT DELETE ====== OK
Route::resource('order', 'OrderController');

// User registration with API
Route::post('/register', 'UserController@register');

// User login with API
Route::post('/login', 'UserController@login');


// Do not touch : truc de base
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });