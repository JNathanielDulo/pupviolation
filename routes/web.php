<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('auth.login');
});

Route::get('/Welcomelaravel', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/userlist', [HomeController::class, 'users']);

Route::get('/users', [HomeController::class, 'users']);

// violation page
Route::get('/violations', [HomeController::class, 'violations']);

Route::get('/offenders', [HomeController::class, 'offenders']);

Route::get('/sanction_cleared', [HomeController::class, 'sanction_cleared']);

Route::get('/report_logs', [HomeController::class, 'report_logs']);