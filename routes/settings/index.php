<?php

use App\Http\Controllers\Settings\AccountController;
use App\Http\Controllers\Settings\DangerController;
use App\Http\Controllers\Settings\SecurityController;
use Illuminate\Support\Facades\Route;

Route::get('settings/account', [AccountController::class, 'index'])->name('settings.account');
Route::patch('settings/account', [AccountController::class, 'update']);

Route::get('settings/security', [SecurityController::class, 'index'])->name('settings.security');
Route::put('settings/security', [SecurityController::class, 'update']);

Route::get('settings/danger', [DangerController::class, 'index'])->name('settings.danger');
Route::delete('settings/danger', [DangerController::class, 'delete']);
