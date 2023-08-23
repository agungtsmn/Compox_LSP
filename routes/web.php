<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'index']);
Route::get('/about', [MainController::class, 'about']);
Route::get('/product', [MainController::class, 'product']);

Route::get('/admin', [ProductController::class, 'index']);
Route::post('/admin/create', [ProductController::class, 'store']);
Route::post('/admin/edit/{product}', [ProductController::class, 'update']);
Route::post('/admin/delete/{product}', [ProductController::class, 'destroy']);
