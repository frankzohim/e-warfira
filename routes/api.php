<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccessTokenController;
use App\Http\Controllers\FlightSearchController;
use App\Http\Controllers\GetPriceController;
use App\Http\Controllers\OrderFlightController;
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

Route::middleware('auth:api')->prefix('v1')->group(function(){
    
    Route::get('/user', function(Request $request){
        return $request->user();
    });

});

Route::get('test', function (Request $request) {
    return 'Authenticated from warfira v2';
});

Route::get('/init', AccessTokenController::class);
Route::post('/search', FlightSearchController::class);
Route::post('/price', GetPriceController::class);
Route::post('/order', OrderFlightController::class);