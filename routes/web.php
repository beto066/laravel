<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\LandingController;
use \App\Http\Controllers\PostsController;

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

Route::get('/', [LandingController::class, 'getLandingPage']);
Route::get('/about', [LandingController::class, 'getAboutPage']);
Route::get('/posts', [PostsController::class, 'getPosts']);
Route::get('/posts/test', [PostsController::class, 'test']);
Route::get('/posts/{post}', [PostsController::class, 'getPost']);
Route::post('/new_post', [PostsController::class, 'postBlogspot']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
