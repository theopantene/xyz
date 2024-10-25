<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'soul'],
            ['name' => 'Ambient'],
            ['name' => 'Pop'],
            ['name' => 'Rap'],
            ['name' => 'Funk'],
            ['name' => 'Rock'],
            ['name' => 'Reggae / Dub'],
            ['name' => 'Techno'],
            ['name' => 'Electro'],
        ];
        DB::table('categories')->insert($categories);
    }
}