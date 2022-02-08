<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\ProductController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[AppController::class,'show']);
Route::get('/login',[AppController::class,'login']);
Route::get('/contact',[AppController::class,'contacts']);

Route::get('/admin',[AppController::class,'admin']);
Route::get('/student',[AppController::class,'student']);

Route::get('/product',[ProductController::class,'getAll'])->name('getAll');
Route::post('/create',[ProductController::class,'create'])->name('create');
Route::get('/create',[ProductController::class,'createview'])->name('create');
Route::post('/edit/{id}',[ProductController::class,'edit'])->name('edit');
