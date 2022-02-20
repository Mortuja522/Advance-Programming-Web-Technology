<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
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
Route::get('/',[ProductController::class,'products'])->name('home');
Route::get('/create',[ProductController::class,'create'])->name('create');
Route::post('/create',[ProductController::class,'createsubmit'])->name('create');

Route::get('/edit/{id}',[ProductController::class,'edit'])->name('edit');
Route::post('/edit/{id}',[ProductController::class,'editsubmit'])->name('edit');

Route::get('/delete/{id}', [ProductController::class,'delete'])->name('delete');

Route::get('/login',[CustomerController::class,'login'])->name('login');
Route::get('/register',[CustomerController::class,'register'])->name('register');
Route::post('/login',[CustomerController::class,'loginsubmit'])->name('login');
Route::post('/register',[CustomerController::class,'registersubmit'])->name('register');

Route::get('/cart/{id}',[OrderController::class,'order'])->name('cart');
Route::get('/cart',[OrderController::class,'showcart'])->name('cart');

