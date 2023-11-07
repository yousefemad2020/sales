<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\SettingController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Admin\LoginController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/show',[SettingController::class,'show']);







Route::group([
    "prefix" => "admin" ,
    "middleware" => "guest:admin" ,
    "as" => "admin."
],function(){
    Route::get('login', [LoginController::class,'show_login_view']  )->name('show_login') ;
    Route::post('login',[LoginController::class,'login'])->name('login') ;
});


Route::group([
    "prefix" => "admin" ,
    "middleware" => "auth:admin" ,
    "as" => "admin."
],function(){
    Route::get('/', [DashboardController::class,'index']  )->name('dashboard');
    Route::get('logout',[LoginController::class,'logout'])->name('logout');
});