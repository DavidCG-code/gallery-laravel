<?php

namespace App\Http\Controllers;
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



Route::get('/', [GalleryController::class, 'index'])->name('home');



Route::get('/register', [RegisterController::class, 'registerView'])->name('registerView');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/login', [LoginController::class, 'loginView'])->name('loginView');
Route::post('/login', [LoginController::class, 'authenticate'])->name('logIn');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::delete('/delete/{id}', [GalleryController::class, 'destroy'])->name('pepe');


Route::middleware(['auth'])->group(function () {
  //
  Route::get('/profile/{id}', [UserController::class, 'edit'])->name('profile');
  Route::put('/profile/{id}', [UserController::class, 'update'])->name('update');

  Route::get('/create', [GalleryController::class, 'create'])->name('upImage');
  Route::post('/create', [GalleryController::class, 'store'])->name('upLoad');


 
});


