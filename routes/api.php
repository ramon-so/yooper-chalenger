<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ClientsController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [UsersController::class, 'login']);

Route::post('/saveContract', [ServicesController::class, 'saveContract']);
Route::post('/attContract', [ServicesController::class, 'attContract']);
Route::post('/deleteClient', [ServicesController::class, 'deleteClient']);

Route::post('/clientInfo', [ClientsController::class, 'getClientInfo']);
