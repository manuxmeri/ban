<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DishController;
use App\Http\Controllers\PrinController;

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
    return view('prin');
});
Route::get('/prin', [PrinController::class,'index'])->name('prin');
Route::get('/dish', [DishController::class,'index'])->name('dish');
Route::get('/register', [RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store']);
Route::get('auth/login', [LoginController::class,'index'])->name('login');
Route::post('auth/login', [LoginController::class,'store']);



