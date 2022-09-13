<?php

namespace App\Http\Resources;

use App\Place;
use Illuminate\Http\Resources\Json\JsonResource;

class PlaceResource extends JsonResource
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
            'place_name' => $this->place_name,
            'category' => $this->category,
            'description' => $this->description,
            'tags' => TagResource::collection($this->tags)
        ];
    }

    public function show($id) {
        $place = Place::findOrFail($id);
        return new PlaceResource($place);
    }
}
