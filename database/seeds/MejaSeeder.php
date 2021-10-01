<?php

use Illuminate\Database\Seeder;

class MejaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mejas')->insert([
            [
                'no_meja' => 1,
                'name' => 'Meja 1',
                'lokasi' => 'Urutan 1'
            ],[
                'no_meja' => 2,
                'name' => 'Meja 2',
                'lokasi' => 'Urutan 2'
            ]
        ]);
    }
}
