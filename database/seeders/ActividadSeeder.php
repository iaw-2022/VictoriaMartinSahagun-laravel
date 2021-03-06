<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActividadSeeder extends Seeder
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
                'nombre'=>'yoga',
                'descripcion' => 'El yoga es una práctica que conecta el cuerpo, la respiración y la mente. Esta práctica utiliza posturas físicas, ejercicios de respiración y meditación para mejorar la salud general.',
                'dia'=>'viernes',
                'horario'=>'12:30',
                'localizacion'=>'patio',
                'img'=>'https://res.cloudinary.com/proyectobalcon/image/upload/v1652636837/img/aqua_gym_zyvz6s.png',
                'img_id'=>'img/aqua_gym_zyvz6s'
            ],
            [
                'nombre'=>'cata de vinos',
                'descripcion' => 'Vas a aprender la diferencia entre catar y degustar distintos tipos de vinos y además te explicaremos todos los sentidos que intervienen en la memoria sensorial.',
                'dia'=>'sabado',
                'horario'=>'19:30',
                'localizacion'=>'restaurant',
                'img'=>'https://res.cloudinary.com/proyectobalcon/image/upload/v1652636839/img/cata_vino_k5n4d4.jpg',
                'img_id'=>'img/cata_vino_k5n4d4'
            ],
            [
                'nombre'=>'aqua gym',
                'descripcion' => 'El aquagym es una actividad que aprovecha el entorno acuático para ejercitar los músculos, así como aumentar la resistencia y la fuerza del cuerpo, al ritmo de la música.',
                'dia'=>'domingo',
                'horario'=>'16:00',
                'localizacion'=>'pileta exterior',
                'img'=>'https://res.cloudinary.com/proyectobalcon/image/upload/v1652636837/img/aqua_gym_zyvz6s.png',
                'img_id'=>'img/aqua_gym_zyvz6s'
            ]
        ];
        DB::table('actividades')->insert($data);
    }
}
