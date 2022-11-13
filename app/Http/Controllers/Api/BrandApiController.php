<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BrandResource;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandApiController extends Controller
{
    public function show(Brand $brand){
        $cars=$brand->cars;
        return BrandResource::collection($cars);
    }
}
