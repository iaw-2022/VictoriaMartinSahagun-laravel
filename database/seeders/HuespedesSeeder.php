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
                'email'=>'primerHuesped@hotmail.com'
            ],
            [ 
                'email'=>'segundoHuesped@hotmail.com'
            ],
            [ 
                'email'=>'tercerHuesped@hotmail.com'
            ]
        ];
        DB::table('huespedes')->insert($data);
    }
}
