<?php

use App\Http\Controllers\Api\BrandApiController;
use App\Http\Controllers\Api\CarApiController;
use App\Http\Controllers\Api\UserApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

    Route::get('/cars',[CarApiController::class,'index']);
    Route::get('/car/{id}',[CarApiController::class,'show']);

    Route::get('/brand/{brand}/cars',[BrandApiController::class,'show']);


    Route::post('/register',[UserApiController::class,'register']);
