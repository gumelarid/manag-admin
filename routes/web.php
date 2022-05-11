<?php

use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\NavController;
use App\Http\Controllers\Dashboard\RoleController;
use App\Http\Controllers\Dashboard\UserAccessController;
use App\Http\Controllers\Dashboard\UserController;
use Illuminate\Support\Facades\Route;
use PhpParser\NodeVisitor\NameResolver;

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

// role
Route::get('/dashboard/role', [RoleController::class, 'index']);
Route::post('/dashboard/role/add', [RoleController::class, 'store']);
Route::post('/dashboard/role/edit/{id}', [RoleController::class, 'update']);
Route::get('/dashboard/role/delete/{id}', [RoleController::class, 'destroy']);
Route::get('/dashboard/role/access', [RoleController::class, 'access']);
Route::post('/dashboard/role/access/checked', [RoleController::class, 'checked']);

// Users
Route::get('/dashboard/user', [UserController::class, 'index']);
Route::post('/dashboard/user/add', [UserController::class, 'store']);
Route::get('/dashboard/user/status', [UserController::class, 'change']);
Route::post('/dashboard/user/edit/{id}', [UserController::class, 'update']);
Route::get('/dashboard/user/delete/{id}', [UserController::class, 'destroy']);


// Navigation 
Route::get('/dashboard/navigation', [NavController::class,'index']);
Route::post('/dashboard/navigation/add', [NavController::class, 'store']);
Route::get('/dashboard/navigation/status', [NavController::class, 'change']);
Route::post('/dashboard/navigation/edit/{id}', [NavController::class, 'update']);
Route::get('/dashboard/navigation/delete/{id}', [NavController::class, 'destroy']);


