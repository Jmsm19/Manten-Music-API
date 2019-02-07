<?php

use App\Artist;
use Illuminate\Database\Seeder;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artist::create([
            "name" => "Evanescence",
        ]);

        Artist::create([
            "name" => "Michael Jackson",
        ]);

        Artist::create([
            "name" => "Nirvana",
        ]);
    }
}
