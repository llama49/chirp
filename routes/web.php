<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'welcome'])->name('welcome');

Route::get('/chirp/user', [PublicController::class, 'chirp'])->name('chirp.user')->middleware('auth');
