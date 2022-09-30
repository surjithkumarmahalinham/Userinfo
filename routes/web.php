<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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
Route::post('/logincheck', [LoginController::class,'login'])->name('login.check');
Route::get('/', [LoginController::class,'register'])->name('view.register');
Route::post('/registerstore', [LoginController::class,'storeuser'])->name('register.store');
Route::post('/otpvalid', [LoginController::class,'otpvalidate'])->name('otp.valid');
