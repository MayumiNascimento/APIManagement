<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// services
Route::get('/services', [\App\Http\Controllers\Api\ServicesController::class, 'index']);
Route::post('/services/new', [\App\Http\Controllers\Api\ServicesController::class, 'store']);
Route::delete('/services/delete/{id}', [\App\Http\Controllers\Api\ServicesController::class, 'destroy']);
Route::put('/services/update/{id}', [\App\Http\Controllers\Api\ServicesController::class, 'update']);
// Route::get('/services/{id}', [\App\Http\Controllers\Api\ServicesController::class, 'id']);

// employee
Route::get('/employee', [\App\Http\Controllers\Api\EmployeeController::class, 'index']);
Route::post('/employee/new', [\App\Http\Controllers\Api\EmployeeController::class, 'store']);
Route::delete('/employee/delete/{id}', [\App\Http\Controllers\Api\EmployeeController::class, 'destroy']);
Route::put('/employee/update/{id}', [\App\Http\Controllers\Api\EmployeeController::class, 'update']);
Route::get('/employee/{id}', [\App\Http\Controllers\Api\EmployeeController::class, 'getId']);

// employee
Route::get('/schedule', [\App\Http\Controllers\Api\SchedulingController::class, 'index']);
Route::post('/schedule/new', [\App\Http\Controllers\Api\SchedulingController::class, 'store']);
Route::delete('/schedule/delete/{id}', [\App\Http\Controllers\Api\SchedulingController::class, 'destroy']);
Route::put('/schedule/update/{id}', [\App\Http\Controllers\Api\SchedulingController::class, 'update']);
// Route::get('/schedule/{id}', [\App\Http\Controllers\Api\SchedulingController::class, 'id']);
