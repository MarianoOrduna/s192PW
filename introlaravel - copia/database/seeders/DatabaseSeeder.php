<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
{
    $this->call(ClienteTableSeeder::class);
/* paso 10 mandar a llamar al seeder */

   /*  {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    } */
}
/* PASO 9 comentar este codigo, lo que esta dentro de la funcion */
}
/* paso 11 ir a la terminal y poner esto php artisan db:seed */