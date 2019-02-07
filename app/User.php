<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
* @OA\Schema(
* schema="User",
* title="User",
* description="User model",
* required={"id", "name"}
* )
*/
class User extends Authenticatable
{
    use Notifiable;

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
    *     description="User name",
    *     title="name",
    *     type="string",
    * ),
    */
    protected $fillable = [
        'name',
    ];
}
