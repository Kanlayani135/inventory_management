<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DepartmentsController;
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
//create
Route::get('/employee/create', [EmployeeController::class, 'createForm'])->name('employee-create-form');
Route::post('/employee/create', [EmployeeController::class, 'create'])->name('employee-create');
//update
Route::get('/product/{employee}/update', [EmployeeController::class, 'updateForm'])->name('employee-update-form');
Route::post('/employee/{employee}/update', [EmployeeController::class, 'update'])->name('employee-update');
//delete
Route::get('/employee/{employee}/delete', [EmployeeController::class, 'delete'])->name('employee-delete');
//view employee
Route::get('/employee/{employee}', [EmployeeController::class,'show'])->name('employee-view'); 

//department

Route::get('/department', [DepartmentsController::class, 'list'])->name('departments-list');

Route::get('/department/create', [DepartmentsController::class, 'createForm'])->name('departments-create-form');

Route::post('/department/create', [DepartmentsController::class, 'create'])->name('departments-create');

