<?php


use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserPostController;
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


Route::get('/',[DashboardController::class,'index'])->name('index');




Route::get('/register',[RegisterController::class,'register'])->name('register');
Route::post('/register',[RegisterController::class,'depo']);

Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'depolama']);

Route::post('/logout',[LogoutController::class,'log'])->name('logout');

Route::get('/post',[PostController::class,'post'])->name('post');
//Route::get('/posts/{post}',[PostController::class,'show'])->name('posts.show');
Route::post('/post',[PostController::class,'pos']);
Route::delete('/post/{post}',[PostController::class,'dest'])->name('post.dest'); //delete işlemi

Route::post('/post/{post}/likes',[PostLikeController::class,'store'])->name('post.likes');
Route::delete('/posts/{post}',[PostLikeController::class,'destroy'])->name('post.destroy');

Route::get('/users/{user:surname}/posts',[UserPostController::class,'index'])->name('users.posts');


