<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('words')->insert([
            ['word' => 'apple', 'definition' => 'A fruit that is typically round, red or green, and sweet.'],
            ['word' => 'banana', 'definition' => 'A long, curved fruit that has a thick skin and soft sweet flesh.'],
            ['word' => 'cherry', 'definition' => 'A small, round stone fruit that is typically bright or dark red.'],
            ['word' => 'date', 'definition' => 'The fruit of a date palm, a sweet and sticky fruit that grows in clusters.']
        ]);
    }
}
