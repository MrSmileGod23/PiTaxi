<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CarResource;
use App\Models\Car;
use Illuminate\Http\Request;

class CarApiController extends Controller
{
    public function index(){
        return CarResource::collection(Car::all());
    }

    public function show($id){
        return CarResource::make(Car::find($id));
    }

    public function search(Request $request){
        $query = $request->get('query');
        $cars=Car::with('brand')
            ->where('model','LIKE',"%$query%")
            ->get();
        return CarResource::collection($cars);
    }
}
