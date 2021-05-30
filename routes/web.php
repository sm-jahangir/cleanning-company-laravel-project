<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\TagController;
use App\Http\Controllers\Backend\UserController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => 'auth'], function(){

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/roles', RoleController::class, ['names' => 'roles']);
    Route::resource('/users', UserController::class, ['names' => 'users']);
    Route::resource('/tags', TagController::class, ['names' => 'tags']);
    Route::resource('/category', CategoryController::class, ['names' => 'category']);
    Route::resource('/post', PostController::class, ['names' => 'post']);
});






