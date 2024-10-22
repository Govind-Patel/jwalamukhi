<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InstructorController;
use App\Http\Controllers\Admin\GallaryImageController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\CounterController;
use App\Http\Controllers\Admin\BannerController;

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

Route::get('/', [HomeController::class, 'dashboard']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::get('admin/login',[LoginController::class,'loginbasic']);
Route::post('admin/signin',[LoginController::class,'adminsignin']);
Route::get('admin/signout',[LoginController::class,'signout']);

Route::group(['middleware' => 'IsAdmin'],function(){
    Route::get('admin/dashboard',[DashboardController::class,'index']);
    // Instructor 
    Route::get('instructors/add',[InstructorController::class,'show']);
    Route::post('instructorsave',[InstructorController::class,'save']);
    Route::get('instructors/list',[InstructorController::class,'list']);
    Route::get('instructors/edit/{id}',[InstructorController::class,'edit']);
    Route::post('instructors/update/{id}',[InstructorController::class,'update']);
    Route::get('instructors/delete/{id}',[InstructorController::class,'delete']);

    Route::get('gallary/add',[GallaryImageController::class,'show']);
    Route::post('gallary/save',[GallaryImageController::class,'save']);
    Route::get('gallary/list',[GallaryImageController::class,'list']);
    Route::get('gallary/edit/{id}',[GallaryImageController::class,'edit']);
    Route::post('gallary/update/{id}',[GallaryImageController::class,'update']);
    Route::get('gallary/delete/{id}',[GallaryImageController::class,'delete']);

    /* Settings */
    Route::get("admin/settings",[CompanyController::class,'settings']);
    Route::post("admin/settings/{id}",[CompanyController::class,'settings_update']);
    /* About */
    Route::get("admin/about",[AboutController::class,'about']);
    Route::post("admin/about/{id}",[AboutController::class,'about_update']);

    Route::get("admin/counter/list",[CounterController::class,'list']);
    Route::get("admin/counter/edit/{id}",[CounterController::class,'edit']);
    Route::post("admin/counter/update/{id}",[CounterController::class,'update']);

    /* Banner */
    Route::get('admin/banners/add',[BannerController::class,'show']);
    Route::post('admin/banners/save',[BannerController::class,'save']);
    Route::get('admin/banners/list',[BannerController::class,'list']);
    Route::get('admin/banners/edit/{id}',[BannerController::class,'edit']);
    Route::post('admin/banners/update/{id}',[BannerController::class,'update']);
    Route::get('admin/banners/delete/{id}',[BannerController::class,'delete']);
});