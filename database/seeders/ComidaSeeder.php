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
                'dia'=>'lunes',
                'tipo'=>'cena',
                'img'=>'https://res.cloudinary.com/proyectobalcon/image/upload/v1652636836/img/hamburguesa_cntqos.jpg',
                'img_id'=>'img/hamburguesa_cntqos'
            ],
            [ 
                'nombre'=>'Sorrentinos de la casa',
                'descripcion'=>'Sorrentinos de zapallo calabaza acompañados de una salsa de roquefort y nueces.',
                'dia'=>'sabado',
                'tipo'=>'cena',
                'img'=>'https://res.cloudinary.com/proyectobalcon/image/upload/v1652636836/img/sorrentinos_kdnwdy.jpg',
                'img_id'=>'img/sorrentinos_kdnwdy'
            ],
            [ 
                'nombre'=>'Asado',
                'descripcion'=>'Porcion de carne a elección (vacío, entreña, costilla) acompañado de una ensalada con vegetales de la huerta.',
                'dia'=>'domingo',
                'tipo'=>'almuerzo',
                'img'=>'https://res.cloudinary.com/proyectobalcon/image/upload/v1652636836/img/asado_g6ykz3.jpg',
                'img_id'=>'img/asado_g6ykz3'
            ]
        ]
        ;
        DB::table('comidas')->insert($data);
    }
}
