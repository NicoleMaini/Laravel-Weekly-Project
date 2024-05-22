<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 30; $i++) {
            DB::table('products')->insert([
                'title' => fake()->words(rand(3, 10), true),
                'author' => fake()->name(),
                'description' => fake()->paragraph(rand(1, 2), true),
                'article' => fake()->paragraph(rand(10, 15), true),
                'img' => 'https://picsum.photos/800/800',
                'user_id' => rand(1, 5),
            ]);
        }
    }
}
