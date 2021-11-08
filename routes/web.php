<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CardController;
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

Route::get('/', HomeController::class)->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('posts',[PostController::class,'index'])->name('posts.index');

Route::get('cards',[CardController::class,'index'])->name('cards.index');

Route::get('posts/{post}',[PostController::class,'show'])->name('posts.show');

Route::get('cards/{card}',[CardController::class,'show'])->name('cards.show');

Route::get('posts/create/{user}',[PostController::class,'create'])->name('posts.create');

Route::post('posts',[PostController::class,'store'])->name('posts.store');