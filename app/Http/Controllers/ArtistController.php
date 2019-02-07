<?php

namespace App\Http\Controllers;

use App\Artist;
use Illuminate\Http\Request;
use App\Http\Resources\ArtistResource;

class ArtistController extends Controller
{
    /**
    * @OA\Get(path="/api/artist",
    *   tags={"Model: User"},
    *   summary="Display a listing of Artists",
    *   operationId="getAllArtists",
    *
    *   @OA\Response(
    *       response=200,
    *       description="Artistas encontrados",
    *       @OA\JsonContent(ref="#/components/schemas/ArtistsCollection")
    *   )
    * )
    */
    public function index()
    {
        return ArtistResource::collection(Artist::all());
    }
}
