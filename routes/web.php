<?php

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
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'index']);

Route::get('/about', [MainController::class, 'about']);

Route::get('/products/{id}', [MainController::class, 'products']);

Route::get('/news', [MainController::class, 'news']);

Route::get('/contact', [MainController::class, 'contact']);

Route::get('/productDetail/{id}/{customer_temp_id}', [MainController::class, 'productDetail']);

Route::get('/cart/{id}', [MainController::class, 'cart']);

Route::get('/checkout/{id}', [MainController::class, 'checkout']);

Route::get('/order/{id}', [MainController::class, 'order']);

Route::post('/addCart', [MainController::class, 'addCart']);

Route::post('/deleteCart', [MainController::class, 'deleteCart']);

Route::post('/addOrder', [MainController::class, 'addOrder']);

Route::get('/orderComplete/{id}', [MainController::class, 'orderComplete']);

Route::post('/updateCart', [MainController::class, 'updateCart']);
