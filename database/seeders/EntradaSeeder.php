<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EntradaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('entradas')->insert([
            [
                'placa' => 'ABC123',
                'fecha' => Carbon::now()->toDateTimeString(),
            ],
            [
                'placa' => 'XYZ789',
                'fecha' => Carbon::now()->subDay()->toDateTimeString(),
            ],
            // Puedes agregar más datos de ejemplo aquí
        ]);
    }
}