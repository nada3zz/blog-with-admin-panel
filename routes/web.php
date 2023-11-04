<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\User\UserHomeController;
use App\Http\Controllers\User\UserPostController;


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

//User Routes

Route::group(['namespace' => 'User'], function(){

    Route::get('/',  [UserHomeController::class, 'index']);
    Route::get('post/{post}',  [UserPostController::class, 'post'])->name('post');

});


//Admin Routes

Route::get('admin/home',  [AdminHomeController::class, 'index'])->name('admin.home');
Route::resource('admin/post', AdminPostController::class);
Route::resource('admin/tag', TagController::class);
Route::resource('admin/category', CategoryController::class);
Route::resource('admin/user', UserController::class);

