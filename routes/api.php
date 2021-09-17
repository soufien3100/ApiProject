<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\controllers\ResultController;
use App\http\controllers\DriverController;
use App\Http\Controllers\CircuitController;
use App\Http\Controllers\ConstructorController;
use App\http\controllers\RaceController;


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

Route::apiResources([
    'drivers' => DriverController::class,
    'circuits' => CircuitController::class,
    'constructors' => ConstructorController::class,
    'results' => ResultController::class,
    'races' => RaceController::class
]);
