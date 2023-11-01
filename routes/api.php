<?php

use App\Http\Controllers\Api\PermissionController;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/users', function (Request $request) {
    return $request->user();
});

Route::apiResource('users',UserController::class);
Route::apiResource('roles',RoleController::class);
Route::apiResource('permissions',PermissionController::class);
