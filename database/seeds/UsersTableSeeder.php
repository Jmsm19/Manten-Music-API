<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Jorge'
        ]);

        User::create([
            'name' => 'Daniel'
        ]);

        User::create([
            'name' => 'Verónica'
        ]);

        User::create([
            'name' => 'Ailyn'
        ]);
    }
}
