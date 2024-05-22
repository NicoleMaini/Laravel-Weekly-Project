<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Database\seeders\UsersSeeder;
use Database\seeders\ProductsSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // prof non ho capito perché se mando il comando *php artisan migrate:fresh --seed* mìnon riesce a trovare il seeder del primo elemento
        // ma se mando il comando *php artisan db:seed UsersSeeder* e *php artisan db:seed ProductsSeeder* allora mi popola le tabella. E' normale?
        $this->call([UsersSeeder::class, ProductsSeeder::class]);
    }
}
