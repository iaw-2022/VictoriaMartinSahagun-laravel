<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservasActividadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [ 
                'actividad_id'=>1,
                'cabana_id'=>1,
                'cantidad_personas'=>4
            ],
            [ 
                'actividad_id'=>2,
                'cabana_id'=>2,
                'cantidad_personas'=>2
            ]
        ]
        ;
        DB::table('reservas_actividades')->insert($data);
    }
}
