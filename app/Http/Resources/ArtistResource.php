<?php

namespace App\Http\Resources;

use App\Http\Resources\AlbumResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ArtistResource extends JsonResource
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
            "artist" => $this->name,
            "albums" => AlbumResource::collection($this->albums),
        ];
    }
}
