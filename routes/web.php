<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeeController;
use App\Http\Controllers\bannerController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\serviceController;
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
// MVC (Model, View and Controller)
// php artisan make:controller controllername

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[StudentController::class,'login']);
Route::get('/login2',[StudentController::class,'login2']);

Route::get('/form',[StudentController::class,'form']);
Route::get('/validform',[StudentController::class,'validform']);

Route::get('/table',[StudentController::class,'table']);
Route::get('/table2',[StudentController::class,'table2']);

Route::get('/table3',[StudentController::class,'table3']);
Route::get('/sudent2',[StudentController::class,'student2']);

// mir husen code is started form here

Route::get('fee/details',[FeeController::class,'index']);
Route::POST('fees',[FeeController::class,'store']);
Route::get('fees/edit/{id}',[FeeController::class,'edit']);
Route::POST('fees/update/{id}',[FeeController::class,'update']);
Route::get('deletes/{id}',[FeeController::class,'delete']);
Route::get('fees/details/{id}',[FeeController::class,'details']);

Route::get('student/details',[studentController::class,'infor']);
Route::POST('students',[studentController::class,'store']);
Route::get('students/edit/{id}',[studentController::class,'edit']);
Route::get('delete/{id}',[studentController::class,'delete']);
Route::post('student/update/{id}',[studentController::class,'update']);
Route::get('students/detail/{id}',[studentController::class,'detail']);

Route::get('banners/details',[bannerController::class,'index']);
Route::post('banners/store',[bannerController::class,'store']);
Route::get('delete/banner/{id}',[bannerController::class,'delete']);
Route::get('banners/edit/{id}',[bannerController::class,'edit']);
Route::post('banners/update/{id}',[bannerController::class,'update']);
Route::get('banners/details/{id}',[bannerController::class,'details']);

Route::get('services/details',[serviceController::class,'service']);
Route::post('services/store',[serviceController::class,'store']);
Route::get('delete/service/{id}',[serviceController::class,'delete']);
Route::get('services/edit/{id}',[serviceController::class,'edit']);
Route::post('services/update/{id}',[serviceController::class,'update']);
Route::get('services/details/{id}',[serviceController::class,'details']);
