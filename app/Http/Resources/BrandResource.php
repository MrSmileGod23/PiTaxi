<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BrandResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id"=>$this->id,
            "vin"=>$this->vin,
            "regNumber"=>$this->regNumber,
            "brand"=>$this->brand->name,
            "model"=>$this->model,
            "color"=>$this->color,
            "year"=>$this->year,
            "registration"=>$this->registration,
        ];
    }
}
