<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\controllers\DriverController;
use App\http\controllers\RaceController;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResources([
     'drivers' => DriverController::class ,
     'races' => RaceController::class  // fixer un api par une route 
    ]);


