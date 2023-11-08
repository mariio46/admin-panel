<?php

use App\Http\Controllers\SuperAdmin\RolePermission\PermissionAssignmentController;
use App\Http\Controllers\SuperAdmin\RolePermission\PermissionController;
use App\Http\Controllers\SuperAdmin\RolePermission\RoleAssignmentController;
use App\Http\Controllers\SuperAdmin\RolePermission\RoleController;
use Illuminate\Support\Facades\Route;

Route::controller(RoleController::class)->group(function () {
    Route::get('roles', 'table')->name('roles.table');
    Route::post('roles', 'store')->name('roles.store');
    Route::put('roles/{role}', 'update')->name('roles.update');
    Route::delete('roles/{role}', 'delete')->name('roles.delete');
});

Route::controller(PermissionController::class)->group(function () {
    Route::get('permissions', 'table')->name('permissions.table');
    Route::post('permissions', 'store')->name('permissions.store');
    Route::put('permissions/{permission}', 'update')->name('permissions.update');
    Route::delete('permissions/{permission}', 'delete')->name('permissions.delete');
});

Route::controller(RoleAssignmentController::class)->group(function () {
    Route::get('role/assignments', 'create')->name('role.assignments.create');
    Route::post('role/assignments', 'store')->name('role.assignments.store');
    Route::get('role/assignments/{user}', 'edit')->name('role.assignments.edit');
    Route::put('role/assignments/{user}', 'update')->name('role.assignments.update');
});

Route::controller(PermissionAssignmentController::class)->group(function () {
    Route::get('permission/assignments', 'create')->name('permission.assignments.create');
    Route::post('permission/assignments', 'store')->name('permission.assignments.store');
    Route::get('permission/assignments/{role}', 'edit')->name('permission.assignments.edit');
    Route::put('permission/assignments/{role}', 'update')->name('permission.assignments.update');
});
