<?php

namespace App\Http\Resources\Api\Vehicles;

use Illuminate\Http\Resources\Json\JsonResource;

class VehiclesResource extends JsonResource
{
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
