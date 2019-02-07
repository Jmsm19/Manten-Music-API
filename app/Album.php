<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* @OA\Schema(
* schema="Album",
* title="Album",
* description="Album model",
* required={"id", "name", "year", "artist_id"}
* )
*/
class Album extends Model
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
    *     property="name",
    *     description="Album name",
    *     title="name",
    *     type="string",
    * ),
    * @OA\Property(
    *     property="year",
    *     description="Album release year",
    *     title="year",
    *     type="integer",
    * ),
    * @OA\Property(
    *     property="artist_id",
    *     description="Unique identificator for Artists",
    *     title="artist_id",
    *     type="integer",
    *     format="int64",
    * ),
    */
    protected $fillable = [
        'name', 'year', 'artist_id'
    ];

    public function songs()
    {
        return $this->hasMany('\App\Song');
    }

    public function artist()
    {
        return $this->belongsTo('\App\Artist');
    }
}
