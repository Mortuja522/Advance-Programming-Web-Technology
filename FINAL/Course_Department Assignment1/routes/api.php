<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseAPIController;
use App\Http\Controllers\DepartmentAPIController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

});

//course

Route::get('/course/all',[CourseAPIController::class,'getall']);
Route::post('/course/add',[CourseAPIController::class,'add']);
Route::put('/course/update/{id}',[CourseAPIController::class,'edit']);
Route::delete('/course/delete/{id}',[CourseAPIController::class,'delete']);

//department

Route::get('/department/all',[CourseAPIController::class,'getall']);
Route::post('/department/add',[CourseAPIController::class,'add']);
Route::put('/department/update/{id}',[CourseAPIController::class,'edit']);
Route::delete('/department/delete/{id}',[CourseAPIController::class,'delete']);


