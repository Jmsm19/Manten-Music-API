<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use App\Http\Requests\UserByNameRequest;

class UserController extends Controller
{
    public function getUserByName(UserByNameRequest $request)
    {
        $user = User::where('name', $request->username)->first();
        if ($user) {
            return new UserResource($user);
        }
        return response()->json([
            'error' => 'Usuario no encontrado'
        ], 404);
    }
}
