<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\LogoutController;
use App\Http\Controllers\Api\RajaOngkirController;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ProvinceController;
use App\Models\Citiess;
use App\Models\Provinces;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
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

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::get('/search/cities/{id}', [CityController::class, 'get']);
    Route::get('/search/provinces/{id}', [ProvinceController::class, 'get']);
    Route::post('/logout', [AuthController::class, 'logout']);

});

