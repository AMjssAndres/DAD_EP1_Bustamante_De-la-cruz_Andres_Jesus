<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehiculos')->insert([
            [
                'placa' => 'ABC123',
                'modelo' => 'Toyota Corolla',
                'propietario' => 'Juan Pérez',
            ],
            [
                'placa' => 'XYZ789',
                'modelo' => 'Honda Civic',
                'propietario' => 'María López',
            ],
            // Puedes agregar más datos de ejemplo aquí
        ]);
    }
}