<?php

use Illuminate\Database\Seeder;

class Genres_SoundsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres_sounds')->insert([
            [
                'genre_id' => 1,
                'sound_id' => 1,
            ],
            [
                'genre_id' => 1,
                'sound_id' => 2,
            ],
            [
                'genre_id' => 2,
                'sound_id' => 3,
            ],
            [
                'genre_id' => 2,
                'sound_id' => 4,
            ],
        ]);
    }
}
