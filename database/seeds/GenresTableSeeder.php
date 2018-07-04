<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            [
                'name' => "Video Game",
            ],
            [
                'name' => "Movie",
            ],
            [
                'name' => "RPG",
            ],
            [
                'name' => "RogueLike",
            ],
        ]);    
    }
}
