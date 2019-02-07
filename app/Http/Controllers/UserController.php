<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use App\Http\Requests\UserByNameRequest;

class UserController extends Controller
{
    /**
    * @OA\Post(path="/api/user",
    *   tags={"Model: User"},
    *   summary="Get User by username",
    *   operationId="getUserByName",
    *
    *   @OA\RequestBody(
    *       required=true,
    *       @OA\JsonContent(ref="#/components/schemas/UserByNameRequest"),
    *   ),
    *   @OA\Response(
    *       response=200,
    *       description="Usuario encontrado",
    *       @OA\JsonContent(ref="#/components/schemas/UserResource")
    *   ),
    *   @OA\Response(
    *       response=404,
    *       description="Usuario no encontrado",
    *       @OA\JsonContent(ref="#/components/schemas/ErrorResponse")
    *   ),
    *   @OA\Response(
    *       response=422,
    *       description="Datos inválidos, parámetos requeridos faltantes",
    *       @OA\JsonContent(ref="#/components/schemas/InvalidData")
    *   ),
    * )
    */
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
