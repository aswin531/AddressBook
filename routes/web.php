<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AddressController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
//Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('register', [AuthController::class, 'register'])->name('register');
// Route::post('create_user', [AuthController::class, 'createUser'])->name('authenticate');

Route::group(['middleware' => 'auth'], function() {
    Route::get('address', [AddressController::class,'index'])->name('contacts');
});