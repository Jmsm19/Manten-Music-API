<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* @OA\Schema(
* schema="Song",
* title="Song",
* description="Song model",
* required={"id", "title", "album_id"}
* )
*/
class Song extends Model
{
    /**
    * @OA\Property(
    *     property="id",
    *     description="Unique identificator",
    *     title="id",
    *     type="integer",
    *     format="int64",
    * ),
    * @OA\Property(
    *     property="title",
    *     description="Song title",
    *     title="title",
    *     type="string",
    * ),
    * @OA\Property(
    *     property="album_id",
    *     description="Unique identificator for Albums",
    *     title="album_id",
    *     type="integer",
    *     format="int64",
    * ),
    */
    protected $fillable = [
        'title', 'album_id'
    ];

    public function album()
    {
        return $this->belongsTo('\App\Album');
    }
}
