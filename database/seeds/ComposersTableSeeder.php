<?php

use Illuminate\Database\Seeder;

class ComposersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('composers')->insert([
            [
                'name' => "Nobuo Uematsu",
                'picture' => "https://upload.wikimedia.org/wikipedia/commons/3/30/Nobuo_Uematsu.jpg",
            ],
            [
                'name' => "Ben Prunty",
                'picture' => "https://pbs.twimg.com/profile_images/993354793170026496/JIkT8ket_400x400.jpg",
            ],
            [
                'name' => "John Williams",
                'picture' => "https://upload.wikimedia.org/wikipedia/commons/b/b8/John_Williams_tux.jpg",
            ],
            [
                'name' => "Hans Zimmer",
                'picture' => "https://upload.wikimedia.org/wikipedia/commons/thumb/b/be/Hans_Zimmer_2010.jpg/800px-Hans_Zimmer_2010.jpg",
            ],
            [
                'name' => "Xavier Dang aka MisterMV",
                'picture' => "https://f4.bcbits.com/img/0010005964_10.jpg",
            ],
        ]);
    }
}
