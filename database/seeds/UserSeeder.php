<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => "Akbar Azmi",
                "username" => "akbar",
                "password" => Hash::make('akbar'),
                "level_id" => 1
            ],

            [
                'name' => "Alfin Emha",
                "username" => "alfin",
                "password" => Hash::make('alfin'),
                "level_id" => 1
            ],

        ]);
    }
}
