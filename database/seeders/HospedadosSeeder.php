<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HospedadosSeeder extends Seeder
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
                'huesped_id'=>'1',
                'cabana_id'=>'1'
            ],
            [ 
                'huesped_id'=>'2',
                'cabana_id'=>'2'
            ]
        ];
        DB::table('hospedados')->insert($data);
    }
}
