<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; /* PASO 5 primero definir una importacion */
class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            [
                'nombre'=>'Mariano',
                'apellido'=>'Orduna',
                'correo'=>'mariano@gmail.com',
                'telefono'=>'4426005049' /* PASO 7 para llenar el registro hacer esto,
                separar con comas */
            ],[
                'nombre'=>'Gerson',
                'apellido'=>'Pastrana',
                'correo'=>'Gerson@gmail.com',
                'telefono'=>'4421231233'
            ],[
                'nombre'=>'Ponchito',
                'apellido'=>'Alegria',
                'correo'=>'Ponchito@gmail.com',
                'telefono'=>'4423213211'
            ]]); 
        /* PASO 6 Para mandarle datos se usan esos arreglos */
    }
}
/* Paso 8 ve a databaseseeder */
