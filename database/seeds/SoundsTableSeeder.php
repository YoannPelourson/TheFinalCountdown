<?php

use Illuminate\Database\Seeder;

class SoundsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sounds')->insert([
            [
                'title' => "Final Fantasy VIII OST",
                'genre_id' => 1,
                'composer_id' => 1,
                'price' => 17,
                'stock' => 20,
            ],
            [
                'title' => "Faster Than Light OST",
                'genre_id' => 1,
                'composer_id' => 2,
                'price' => 20,
                'stock' => 10,
            ],
            [
                'title' => "Star Wars New Hope OST",
                'genre_id' => 2,
                'composer_id' => 3,
                'price' => 15,
                'stock' => 1,
            ],
            [
                'title' => "Pirate of the Caribbean OST",
                'genre_id' => 2,
                'composer_id' => 4,
                'price' => 15,
                'stock' => 8,
            ],
            [
                'title' => "Bokkida OST",
                'genre_id' => 1,
                'composer_id' => 5,
                'price' => 20,
                'stock' => 1,
            ],

        ]);
    }
}
