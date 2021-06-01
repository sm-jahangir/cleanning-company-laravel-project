<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\Backend\SettingsController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CleanerController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\TagController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\Frontend\IndexController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => 'auth'], function(){

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/roles', RoleController::class, ['names' => 'roles']);
    Route::resource('/users', UserController::class, ['names' => 'users']);
    Route::resource('/tags', TagController::class, ['names' => 'tags']);
    Route::resource('/category', CategoryController::class, ['names' => 'category']);
    Route::resource('/post', PostController::class, ['names' => 'post']);
    Route::get('pending/post', [PostController::class, 'pending'])->name('post.pending');
    Route::get('post/{id}/approve', [PostController::class, 'approval'])->name('post.approve');


    // Services Area
    Route::resource('service', ServiceController::class, ['names' => 'service']);

    // Cleaners Area
    Route::resource('cleaner', CleanerController::class, ['names' => 'cleaner']);

    Route::get('appoint', [AppointmentController::class, 'indexbackend'])->name('appoint');


    Route::get('subscribers', [App\Http\Controllers\Backend\SubscriberController::class, 'index'])->name('subscibers.index');
    Route::get('subscribers/{subscriber}', [App\Http\Controllers\Backend\SubscriberController::class, 'destroy'])->name('subscibers.destroy');

    // Settings Work Functionality
    Route::get('settings', [SettingsController::class, 'index'])->name('settings.index');
    Route::put('profile-update', [SettingsController::class, 'updateprofile'])->name('settings.updateprofile');
    Route::put('profile-updatepassword', [SettingsController::class, 'updatepassword'])->name('settings.updatepassword');

    // favorite Post functionality
    
   Route::post('favorite/{post}/add', [FavoriteController::class, 'add'])->name('post.favorite');
    //Favorite Post for Backend;
    Route::get('favorite', [FavoriteController::class, 'index'])->name('favorite.index');
    Route::delete('favorite/{post}/remove', [FavoriteController::class, 'removefavpost'])->name('post.removefavpost');

    // Comment Route
    
   Route::post('comment/{post}',[CommentController::class, 'store'])->name('comment.store');
   Route::get('comment',[CommentController::class, 'index'])->name('comment.index');
   Route::delete('comment/{comment}',[CommentController::class, 'destroy'])->name('comment.destroy');
});

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::post('appointment/store/', [AppointmentController::class, 'store'])->name('appointment.store');
Route::view('/contact', 'frontend.contact')->name('contact.page');
Route::view('/about', 'frontend.about')->name('about.page');
Route::view('/services', 'frontend.services')->name('services.page');
Route::view('/portfolio', 'frontend.portfolio')->name('portfolio.page');
Route::view('/pricing', 'frontend.pricing')->name('pricing.page');
Route::get('/blog', [App\Http\Controllers\Frontend\PostController::class, 'index'])->name('post.blog.index');
Route::get('post/{slug}', [App\Http\Controllers\Frontend\PostController::class, 'details'])->name('post.blog.details');
Route::get('category/{slug}', [App\Http\Controllers\Frontend\PostController::class, 'categorybypost'])->name('category.by.post');
Route::get('tag/{slug}', [App\Http\Controllers\Frontend\PostController::class, 'tagbypost'])->name('tag.by.post');

Route::view('/single-post', 'frontend.post-details');
Route::post('subscriber', [App\Http\Controllers\Frontend\SubscriberController::class, 'store'])->name('subscriber.store');
Route::get('search', [App\Http\Controllers\SearchController::class, 'search'])->name('blog.search');




