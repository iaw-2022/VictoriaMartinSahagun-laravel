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
                'tipo'=>'Cena',
                'img'=>'/img/hamburguesa.jpg'
            ],
            [ 
                'nombre'=>'Sorrentinos de la casa',
                'descripcion'=>'Sorrentinos de zapallo calabaza acompañados de una salsa de roquefort y nueces.',
                'dia'=>'Sabado',
                'tipo'=>'Cena',
                'img'=>'/img/sorrentinos.jpg'
            ],
            [ 
                'nombre'=>'Asado',
                'descripcion'=>'Porcion de carne a elección (vacío, entreña, costilla) acompañado de una ensalada con vegetales de la huerta.',
                'dia'=>'Domingo',
                'tipo'=>'Almuerzo',
                'img'=>'/img/asado.jpg'
            ]
        ]
        ;
        DB::table('comidas')->insert($data);
    }
}
