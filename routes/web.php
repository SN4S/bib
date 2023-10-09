<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewsUpdate;
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

//Regular user
Route::get('/', [NewsController::class, 'getAllNews']);
Route::get('/news/{id}', [NewsController::class, 'openOneNews'])->name('onews');


//Admin pages
Route::get('/admpnl/',[AdminController::class, 'show'])->name('admin.panel');
Route::get('/update',[AdminController::class, 'update'])->name('update');
Route::get('/admpnl/destroy',[AdminController::class, 'destroy'])->name('admin.destroy');
