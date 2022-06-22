<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class HuespedesSeeder extends Seeder
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
                'nombre'=>'Primer Huesped',
                'email'=>'primerHuesped@hotmail.com'
            ],
            [ 
                'nombre'=>'Segundo Huesped',
                'email'=>'segundoHuesped@hotmail.com'
            ],
            [ 
                'nombre'=>'Tercer Huesped',
                'email'=>'tercerHuesped@hotmail.com'
            ]
        ];
        DB::table('huespedes')->insert($data);
    }
}
