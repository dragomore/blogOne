<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [MainController::class, 'index'])->name('main.index');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/posts/{post}/edit', [HomeController::class, 'edit'])->name('post.edit');
Route::patch('/posts/{post}', [HomeController::class, 'update'])->name('post.update');
Route::delete('/posts/{post}', [HomeController::class, 'destroy'])->name('post.delete');
Route::get('/posts/create', [HomeController::class, 'create'])->name('post.create');
Route::post('/posts', [HomeController::class, 'store'])->name('post.store');

Route::get('/posts/{post}', [PostController::class, 'show'])->name('post.show');

Auth::routes();
