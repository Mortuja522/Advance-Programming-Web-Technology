<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DepartmentController;
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

Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/login',[HomeController::class,'login'])->name('login');
Route::post('/login',[HomeController::class,'loginSubmit'])->name('login');

Route::get('/create',[StudentController::class,'create'])->name('create');
Route::post('/create',[StudentController::class,'createSubmit'])->name('create');

Route::get('/list',[StudentController::class,'list'])->name('list');
Route::get('/details/{id}',[StudentController::class,'details'])->name('details');

Route::get('/department',[DepartmentController::class,'list'])->name('department');
Route::get('/department/{id}',[DepartmentController::class,'details'])->name('details');