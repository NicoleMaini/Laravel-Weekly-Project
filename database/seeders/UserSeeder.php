<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'profile_image' => 'https://funkopopstore.com/wp-content/uploads/donkey1_2.jpg',
            'name' => 'Asdf User',
            'email' => 'asdf@asdf.asdf',
        ]);

        User::factory(5)->create();
    }
}
