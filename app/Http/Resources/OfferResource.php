<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OfferResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'offer_name'=>$this->offer_name,
            'offer_image'=>$this->offer_image,
            'restaurant'=>new RestaurantResource($this->restaurant),
            'price'=>$this->price,
        ];
    }
}
