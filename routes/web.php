<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [EmployeeController::class, 'index'])->name('index');
Route::get('/add', [EmployeeController::class, 'add'])->name('add');
Route::get('/edit/{id}', [EmployeeController::class, 'edit'])->name('edit');
Route::post('/save/{id?}', [EmployeeController::class, 'save'])->name('save');
Route::put('/update/{id?}', [EmployeeController::class, 'update'])->name('update');
Route::post('/delete/{id}', [EmployeeController::class, 'delete'])->name('delete');
