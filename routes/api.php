<?php

use App\Http\Controllers\Api\BrandApiController;
use App\Http\Controllers\Api\CarApiController;
use App\Http\Controllers\Api\UserApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

    Route::get('/cars',[CarApiController::class,'index']);
    Route::get('/car/{id}',[CarApiController::class,'show']);
    Route::get('/cars/search',[CarApiController::class,'search']);

    Route::get('/brand/{brand}/cars',[BrandApiController::class,'show']);


    Route::post('/register',[UserApiController::class,'register']);
    Route::post('/login',[UserApiController::class,'login']);
    Route::get('/logout',[UserApiController::class,'logout']);
