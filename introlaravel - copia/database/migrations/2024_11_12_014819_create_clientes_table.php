<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100); /* Longitudes de campos, poner , */
            $table->string('apellido');
            $table->string('correo');
            $table->string('telefono',20);
            $table->timestamps();
        });
/*        PASO 2 Despues de poner esto ir a la terminal y poner php artisan migrate
 */    }
 /* PASO 3 Para que se vean los cambios darle php artisan migrate:refresh */
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
/* PASO 1 el comando para crear esto es en la terminal 
php artisan make:migration clientes
y con php artisan make:migration create_clientes, ya te da la estructura */

/* PASO 4 seeders en la terminal crear una nueva clase con el comando
php artisan make:seeder ClienteTableSeeder, va a aparecer en la carpeta de seeders */