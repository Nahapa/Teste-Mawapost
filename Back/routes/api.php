<?php

use App\Http\Controllers\Api\AuthControllerApi;
use App\Http\Controllers\Api\CoinControllerApi;
use App\Http\Controllers\Api\CoinHistoryControllerApi;
use App\Http\Controllers\Api\UserControllerApi;
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

Route::post('login', [AuthControllerApi::class, 'login']);
Route::post('register', [AuthControllerApi::class, 'register']);

Route::get('coins', [CoinControllerApi::class, 'index']);
Route::get('coin_histories', [CoinHistoryControllerApi::class, 'index']);
Route::post('coin_histories', [CoinHistoryControllerApi::class, 'store']);
Route::delete('coin_histories/{id}', [CoinHistoryControllerApi::class, 'destroy']);
Route::apiResource('users', UserControllerApi::class);


Route::group([
    'middleware' => ['auth:sanctum']
], function () {

    Route::get('me', [AuthControllerApi::class, 'me']);
    Route::post('logout', [AuthControllerApi::class, 'logout']);

    // Route::apiResource('users', UserControllerApi::class);
});
