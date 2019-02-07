<?php

use App\Album;
use App\Artist;
use Illuminate\Database\Seeder;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $artist = Artist::where("name", "Evanescence")->first();
        Album::create([
            "name" => "Fallen",
            "year" => 2004,
            "artist_id" => $artist->id,
        ]);
        Album::create([
            "name" => "The Open Door",
            "year" => 2006,
            "artist_id" => $artist->id,
        ]);
        Album::create([
            "name" => "Evanescence",
            "year" => 2011,
            "artist_id" => $artist->id,
        ]);

        // =========================

        $artist = Artist::where("name", "Michael Jackson")->first();
        Album::create([
            "name" => "Got to Be There",
            "year" => 1972,
            "artist_id" => $artist->id,
        ]);
        Album::create([
            "name" => "Ben",
            "year" => 1972,
            "artist_id" => $artist->id,
        ]);

        // =========================

        $artist = Artist::where("name", "Nirvana")->first();
        Album::create([
            "name" => "Bleach",
            "year" => 1989,
            "artist_id" => $artist->id,
        ]);
        Album::create([
            "name" => "Nevermind",
            "year" => 1991,
            "artist_id" => $artist->id,
        ]);
    }
}
