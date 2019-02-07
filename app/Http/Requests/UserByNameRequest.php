<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
*
* @OA\Schema(
*   schema="UserByNameRequest",
*   required={"username"},
*   @OA\Property(
*       description="Username to search for",
*       property="username",
*       type="string"
*   ),
* )
*/
class UserByNameRequest extends FormRequest
{
    public function rules()
    {
        return [
            'username' => 'required|string'
        ];
    }
}
