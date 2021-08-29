<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;



Route::get('/', [HomeController::class, 'home'])->name('home');



Route::get('/blog', [BlogController::class, 'blog'])->name('blog');

Route::get('/blogs/create', [BlogController::class, 'create'])->name('blog.create');

Route::post('/store', [BlogController::class, 'store'])->name('blog.store');

Route::get('/blogs/{blog}', [BlogController::class, 'show'])->name('blog.show');

Route::get('blogs/{blog}/edit', [BlogController::class, 'edit'])->name('blog.edit');



Route::put('blogs/{blog}', [BlogController::class, 'update'])->name('blog.update');

Route::delete('/blogs/{blog}', [BlogController::class, 'destroy'])->name('blog.destroy');


Route::get('/contact', [ContactController::class, 'contacto'])->name('contact');

Route::post('/contact/store', [ContactController::class, 'store'])->name('contacto.store');

Route::get('contact/send', [ContactController::class, 'send'])->name('contacto.send');

