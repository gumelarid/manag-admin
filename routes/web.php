<?php

use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\UserController;
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
    return view('welcome');
});

// Dashboard

// home
Route::get('/dashboard', [HomeController::class, 'index']);



// Users
Route::get('/dashboard/user', [UserController::class, 'index']);
Route::post('/dashboard/user/add', [UserController::class, 'store']);
Route::get('/dashboard/user/status', [UserController::class, 'change']);
Route::post('/dashboard/user/edit/{id}', [UserController::class, 'update']);
Route::get('/dashboard/user/delete/{id}', [UserController::class, 'destroy']);