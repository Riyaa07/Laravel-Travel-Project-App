<?php

namespace App\Http\Resources;

use App\Country;
use Illuminate\Http\Resources\Json\JsonResource;

class CountryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'places' => $this->when(
                $request->get('include') == 'places',
                PlaceResource::collection($this->places))
        ];
    }

    public function show($id) {
        $country = Country::findOrFail($id);
        return new CountryResource($country);
    }
}
