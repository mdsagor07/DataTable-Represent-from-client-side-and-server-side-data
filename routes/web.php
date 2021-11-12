<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Route::post('/store',[UserController::class,'store'])->name('store.user');
Route::get('/delete/{id}',[UserController::class,'delete'])->name('delete.user');

Route::post('/update/{id}',[UserController::class,'update'])->name('update.user');
