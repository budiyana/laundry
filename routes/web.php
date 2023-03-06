<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PaketController;

// use Illuminate\Http\Middleware\HandleCors;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[LoginController::class,'index']);

Route::controller(LoginController::class)->group(function(){
    Route::get('login','index')->name('login');
    Route::post('login/proses','proses')->name('proses');
    Route::get('logout','logout');
});

Route::group(['Middleware' => ['auth']],function(){
    Route::group(['middleware' => ['CekUserLogin:1']],function(){
        Route::resource('beranda',BerandaController::class);
    });
});

Route::resource('Outlet',OutletController::class);
Route::resource('Member',MemberController::class);
Route::resource('Paket',PaketController::class);


