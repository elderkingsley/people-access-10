<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarketingController;

Route::get('/', [MarketingController::class, 'home'])->name('home');
Route::get('/work', [MarketingController::class, 'work'])->name('work');
Route::get('/contact', [MarketingController::class, 'contact'])->name('contact');
Route::get('/careers', [MarketingController::class, 'careers'])->name('careers');
