<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LibroController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('libros', LibroController::class);
Route::resource('autores', AutorController::class);