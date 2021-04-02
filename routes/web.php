<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomepageController;
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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/home',[HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

//home

Route::get('homepage', [HomepageController::class,'homepage'])->name('homepage'); 

//employee
Route::get('/employee', [EmployeeController::class, 'list'])->name('employee-list');
Route::get('/employee/{code}', [EmployeeController::class,'show'])->name('employee-view'); 
