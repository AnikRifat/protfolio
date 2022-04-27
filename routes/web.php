<?php

use App\Http\Controllers\AboutController;
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

Route::get('/', function () {
    return view('front/index');
});
Route::get('/admin', function () {
    return view('admin/index');
});
Route::get('/viewabout', [AboutController::class,'edit']);
Route::get('/about', [AboutController::class,'index']);
Route::get('/viewabout', [AboutController::class,'edit']);
Route::put('/about/{id}', [AboutController::class,'update']);
// Route::resource('about','App\Http\Controllers\AboutController');