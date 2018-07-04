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
            ],
            [
                'name' => "Ben Prunty",
            ],
            [
                'name' => "John Williams",
            ],
            [
                'name' => "Geoff Zanelli",
            ],
            [
                'name' => "Xavier Dang aka MisterMV",
            ],
        ]);
    }
}
