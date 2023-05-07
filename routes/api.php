<?php

use App\Http\Controllers\Api\CarsController;
use App\Http\Controllers\Api\MotorcyclesController;
use App\Http\Controllers\Api\VehiclesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('api')->get('/vehicles', [VehiclesController::class, 'list']);

Route::resource('cars', CarsController::class);
Route::resource('motorcycles', MotorcyclesController::class);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

