<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'profile_image' => 'https://funkopopstore.com/wp-content/uploads/donkey1_2.jpg',
            'name' => 'Ciuchino User',
            'email' => 'ciuchino@example.com',
        ]);

        User::factory(5)->create(); // per popolare con la classe user 101 righe nella tabella generate in modo casuale
    }
}
