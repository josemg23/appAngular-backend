<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\DepartmentController;

Route::get('/departments', [DepartmentController::class, 'index']);
Route::get('/positions', [PositionController::class, 'index']);


Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{user}', [UserController::class, 'edit']);
Route::post('/users', [UserController::class, 'store']);
Route::put('/users/{user}', [UserController::class, 'update']);
Route::delete('/users/{user}', [UserController::class, 'destroy']);
