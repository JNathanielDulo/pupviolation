<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ViolationController;
use App\Http\Controllers\ViolationArchiveController;
use App\Http\Controllers\OffenderController;
use App\Http\Controllers\OffenderViolationController;

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

Route::get('/users', [HomeController::class, 'users'])->name('users');

// violation page
// Route::get('/violations', [HomeController::class, 'violations']);


Route::get('/sanction_cleared', [HomeController::class, 'sanction_cleared'])->name('sanction_cleared');
Route::get('/violations/archive',[ViolationArchiveController::class, 'show_deleted'])->name('violationArchive');
Route::get('violations/archive/{id}',[ViolationArchiveController::class,'restoreDeletedViolation'])->name('restoreDeletedViolation');
Route::get('/report_logs', [HomeController::class, 'report_logs'])->name('reportlogs');


Route::resource('violations',ViolationController::class);

Route::resource('offenders',OffenderController::class);
Route::resource('offenderview',OffenderViolationController::class);

