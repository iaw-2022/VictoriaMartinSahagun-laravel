<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComidaSeeder extends Seeder
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
                'nombre'=>'Hamburguesa balcon',
                'descripcion'=>'Doble medallon de carne vacuna, panceta, cheddar y pan de papa. Acompañado de papas rústicas.',
                'dia'=>'Lunes',
                'comida'=>'Cena'
            ],
            [ 
                'nombre'=>'Sorrentinos de la casa',
                'descripcion'=>'Sorrentinos de zapallo calabaza acompañados de una salsa de roquefort y nueces.',
                'dia'=>'Sabado',
                'comida'=>'Cena'
            ],
            [ 
                'nombre'=>'Asado',
                'descripcion'=>'Porcion de carne a elección (vacío, entreña, costilla) acompañado de una ensalada con vegetales de la huerta.',
                'dia'=>'Domingo',
                'comida'=>'Almuerzo'
            ]
        ]
        ;
        DB::table('comidas')->insert($data);
    }
}
