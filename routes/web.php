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
Route::get('/create', [GalleryController::class, 'create'])->name('upImage');
Route::post('/create', [GalleryController::class, 'store'])->name('upLoad');
Route::get('/{id}',[GalleryController::class, 'destroy']);