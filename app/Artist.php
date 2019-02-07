<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* @OA\Schema(
* schema="Artist",
* title="Artist",
* description="Artist model",
* required={"id", "name"}
* )
*/
class Artist extends Model
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
    *     description="Artist name",
    *     title="name",
    *     type="string",
    * ),
    */
    protected $fillable = [
        'name'
    ];

    public function albums()
    {
        return $this->hasMany('\App\Album');
    }
}
