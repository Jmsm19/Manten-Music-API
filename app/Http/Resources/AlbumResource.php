<?php

namespace App\Http\Resources;

use App\Http\Resources\SongResource;
use Illuminate\Http\Resources\Json\JsonResource;

class AlbumResource extends JsonResource
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
            "name" => $this->name,
            "year" => $this->year,
            "songs" => SongResource::collection($this->songs)
        ];
    }
}
