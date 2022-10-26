<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ClientsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/dash', function(Request $request){
    $inputs = $request->all();
    $services = DB::select('select * from services');
    return view('dashboard', ['username' => $request->username, 'services' => $services]);
});

Route::get('/contracts', [ClientsController::class, 'getAllClients']);

Route::get('/client', [ClientsController::class, 'getClient']);