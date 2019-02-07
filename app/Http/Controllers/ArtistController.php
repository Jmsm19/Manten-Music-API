<?php

namespace App\Http\Controllers;

use App\Artist;
use Illuminate\Http\Request;
use App\Http\Resources\ArtistResource;

class ArtistController extends Controller
{
    public function index()
    {
        return ArtistResource::collection(Artist::all());
    }
}
