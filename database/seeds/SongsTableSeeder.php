<?php

use App\Song;
use App\Album;
use Illuminate\Database\Seeder;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ============================
        $album = Album::where('name', 'Fallen')->first();
        $songs = [
            "Going Under", "Bring Me To Life", "Everybody's Fool", "Haunted",
            "Tourniquet", "Imaginary", "Taking Over Me", "Hello",
            "My Last Breath", "Whisper"
        ];
        for ($i=0; $i < count($songs); $i++) {
            Song::create([
                'title' => $songs[$i],
                'album_id' => $album->id,
            ]);
        }

        $album = Album::where('name', 'Evanescence')->first();
        $songs = [
            "What You Want", null, "The Change", "My Heart Is Broken",
            "The Other Side", "Erase This", "Lost In Paradise",
            "Sick", "End Of The Dream", "Oceans", "Never Go Back",
            "Swimming Home"
        ];
        for ($i=0; $i < count($songs); $i++) {
            Song::create([
                'title' => $songs[$i],
                'album_id' => $album->id,
            ]);
        }

        // ============================

        $album = Album::where('name', 'Got to Be There')->first();
        $songs = [
            "Ain't No Sunshine", "I Wanna Be Where You Are",
            "Girl Don't Take Your Love from Mee", "In Our Small Way",
            "Got to Be There"
        ];
        for ($i=0; $i < count($songs); $i++) {
            Song::create([
                'title' => $songs[$i],
                'album_id' => $album->id,
            ]);
        }

        $album = Album::where('name', 'Ben')->first();
        $songs = [
            "Ben", "Greatest Show On Earth", "People Make the World Go 'Round",
            "We've Got a Good Thing Going", "Everybody's Somebody's Fool"
        ];
        for ($i=0; $i < count($songs); $i++) {
            Song::create([
                'title' => $songs[$i],
                'album_id' => $album->id,
            ]);
        }

        // ============================

        $album = Album::where('name', 'Bleach')->first();
        $songs = [
            "Blew", "Floyd the Barber", "About a Girl", "School",
            "Love Buzz", "Paper Cuts", "Negative Creep", "Scoff",
            "Swap Meet", "Mr. Moustache", "Sifting"
        ];
        for ($i=0; $i < count($songs); $i++) {
            Song::create([
                'title' => $songs[$i],
                'album_id' => $album->id,
            ]);
        }

        $album = Album::where('name', 'Nevermind')->first();
        $songs = [
            "Smells Like Teen Spirit", "In Bloom", "Come As You Are",
            "Breed", "Lithium", "Polly", "Territorial Pissings"
        ];
        for ($i=0; $i < count($songs); $i++) {
            Song::create([
                'title' => $songs[$i],
                'album_id' => $album->id,
            ]);
        }
    }
}
