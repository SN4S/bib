<?php

use App\Http\Controllers\NewsController;
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

Route::get('/', [NewsController::class, 'getAllNews']);
Route::get('/news/{id}', [NewsController::class, 'openOneNews'])->name('onews');

Route::get('/update',[\App\Http\Controllers\NewsUpdate::class,'UpdateFeed']);
