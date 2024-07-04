<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tipos;
use Illuminate\Support\Facades\DB;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * campo ancho en metros peso en toneladas
     */
    public function run(): void
    {
        //

        DB::table('tipos')->insert([
            [
                'tipo' => 'A',
                'total_espacio' => 30,
                'ancho' => 2,
                'largo' => 6,
                'peso_max' => 10,
            ],
            [
                'tipo' => 'B',
                'total_espacio' => 30,
                'ancho' => 2,
                'largo' => 6,
                'peso_max' => 15,
            ],
            [
                'tipo' => 'C',
                'total_espacio' => 30,
                'ancho' => 2,
                'largo' => 6,
                'peso_max' => 20,
            ],
            [
                'tipo' => 'D',
                'total_espacio' => 30,
                'ancho' => 2,
                'largo' => 6,
                'peso_max' => 25,
            ],
            [
                'tipo' => 'E',
                'total_espacio' => 30,
                'ancho' => 2,
                'largo' => 6,
                'peso_max' => 40,
            ],
        ]);
    }
}
