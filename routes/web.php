<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeeController;
use App\Http\Controllers\shopController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\bannerController;
use App\Http\Controllers\searchController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\settingController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\userMassageController;

// Route::get('/', function () {
//     return view('Backend.dashboard');
// });

// //this ruote is website route
Route::get('/',[shopController::class,'index']);
Route::get('home/details/{id}',[shopController::class,'service_details']);
Route::post('contacts/store',[shopController::class,'store'])->name('contact');



Route::get('logout_user', [App\Http\Controllers\HomeController::class, 'logout']);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth']], function() {

    Route::get('student/details',[studentController::class,'infor']);
    Route::POST('students',[studentController::class,'store']);
    Route::get('students/edit/{id}',[studentController::class,'edit']);
    Route::get('delete/{id}',[studentController::class,'delete']);
    Route::post('student/update/{id}',[studentController::class,'update']);
    Route::get('students/detail/{id}',[studentController::class,'detail']);
    

    Route::get('fee/details',[FeeController::class,'index']);
Route::POST('fees',[FeeController::class,'store']);
Route::get('fees/edit/{id}',[FeeController::class,'edit']);
Route::POST('fees/update/{id}',[FeeController::class,'update']);
Route::get('deletes/{id}',[FeeController::class,'delete']);
Route::get('fees/details/{id}',[FeeController::class,'details']);



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

});

Route::get('user',[shopController::class,'massage']);
Route::get('delete/shops/{id}',[shopController::class,'delete']);
// Route::get('login2',[loginController::class,'login'])->name('login');
Route::get('setting',[settingController::class,'index'])->name('index');
Route::post('setting',[settingController::class,'store'])->name('store');
Route::get('delete/{id}',[settingController::class,'delete'])->name('delete');
Route::get('edit/{id}',[settingController::class,'edit']);
Route::post('edit/{id}',[settingController::class,'update']);
