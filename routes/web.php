<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\AboutusController;
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

//About Us
Route::get('aboutus', [AboutusController::class,'aboutus'])->name('aboutus'); 

//employee

Route::get('/employee', [EmployeeController::class, 'list'])->name('employee-list');

//create

Route::get('/employee/create', [EmployeeController::class, 'createForm'])->name('employee-create-form');

Route::post('/employee/create', [EmployeeController::class, 'create'])->name('employee-create');

//update

Route::get('/employee/{employee}/update', [EmployeeController::class, 'updateForm'])->name('employee-update-form');

Route::post('/employee/{employee}/update', [EmployeeController::class, 'update'])->name('employee-update');

//delete

Route::get('/employee/{employee}/delete', [EmployeeController::class, 'delete'])->name('employee-delete')->middleware('is_admin');

//view

Route::get('/employee/{employee}', [EmployeeController::class,'show'])->name('employee-view'); 

//department
Route::get('/department', [DepartmentsController::class, 'list'])->name('departments-list');
Route::get('/department/create', [DepartmentsController::class, 'createForm'])->name('departments-create-form')->middleware('is_admin');

Route::post('/department/create', [DepartmentsController::class, 'create'])->name('departments-create')->middleware('is_admin');

Route::get('/department/{department}/update', [DepartmentsController::class, 'updateForm'])->name('department-update-form')->middleware('is_admin');

Route::post('/department/{department}/update', [DepartmentsController::class, 'update'])->name('department-update')->middleware('is_admin');

Route::get('/department/{department}/delete', [DepartmentsController::class, 'delete'])->name('department-delete')->middleware('is_admin');

Route::get('/department/{department}', [DepartmentsController::class,'show'])->name('department-view');

//division
Route::get('/division', [DivisionController::class, 'list'])->name('division-list');

Route::get('/division/create', [DivisionController::class, 'addform'])->name('division-create-form')->middleware('is_admin');
Route::post('/division/create', [DivisionController::class, 'create'])->name('division-create')->middleware('is_admin');
Route::get('/division/{division}', [DivisionController::class, 'show'])->name('division-view');
Route::get('/division/{division}/update', [DivisionController::class, 'updateForm'])->name('division-update-form')->middleware('is_admin');
Route::post('/division/{division}/update', [DivisionController::class, 'update'])->name('division-update')->middleware('is_admin');
Route::get('/division/{division}/delete', [DivisionController::class, 'delete'])->name('division-delete')->middleware('is_admin');
