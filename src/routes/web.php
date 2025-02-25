<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;

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

Route::get('/', [ProductController::class, 'getProducts'])->name('item');
Route::get('/product/{product_id}', [ProductController::class, 'getDetail']);
Route::get('/login', [ProductController::class, 'login']);
Route::get('/register', [ProductController::class, 'register'])->name('register');
Route::get('/mypage', [ProductController::class, 'mypage']);
Route::get('/mypage/profile', [ProductController::class, 'mypage_profile']);
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
