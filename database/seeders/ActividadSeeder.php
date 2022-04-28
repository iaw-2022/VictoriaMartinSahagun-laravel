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
                'localizacion'=>'patio'
            ],
            [
                'nombre'=>'cata de vinos',
                'descripcion' => 'Vas a aprender la diferencia entre catar y degustar distintos tipos de vinos y además te explicaremos todos los sentidos que intervienen en la memoria sensorial.',
                'dia'=>'sabado',
                'horario'=>'19:30',
                'localizacion'=>'restaurant'
            ],
            [
                'nombre'=>'aqua gym',
                'descripcion' => 'El aquagym es una actividad que aprovecha el entorno acuático para ejercitar los músculos, así como aumentar la resistencia y la fuerza del cuerpo, al ritmo de la música.',
                'dia'=>'domingo',
                'horario'=>'16:00',
                'localizacion'=>'pileta exterior'
            ]
        ];
        DB::table('actividades')->insert($data);
    }
}
