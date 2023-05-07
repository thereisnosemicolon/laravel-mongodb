<?php

use App\Http\Controllers\Api\Cars\PostCarsController;
use App\Http\Controllers\Api\Motorcycles\PostMotorcyclesController;
use App\Http\Controllers\Api\Vehicles\ListVehiclesController;
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
Route::middleware('api')->get('/vehicles', [ListVehiclesController::class, 'list']);
Route::middleware('api')->post('/cars', [PostCarsController::class, 'post']);
Route::middleware('api')->post('/motorcycles', [PostMotorcyclesController::class, 'post']);


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

