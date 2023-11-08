<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// auth()->loginUsingId(1);

Route::get('/', HomeController::class)->name('home');

require __DIR__ . '/auth.php';
