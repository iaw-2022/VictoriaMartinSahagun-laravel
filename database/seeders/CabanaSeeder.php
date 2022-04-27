<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CabanaSeeder extends Seeder
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
                'numero'=>13,
                'capacidad'=>2
            ],
            [
                'numero'=>14,
                'capacidad'=>3
            ],
            [
                'numero'=>15,
                'capacidad'=>4
            ]
        ]
        ;
        DB::table('cabanas')->insert($data);
    }
}
