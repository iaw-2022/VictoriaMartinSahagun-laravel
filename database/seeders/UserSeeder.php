<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = $hashed = Hash::make('recuperacion', [
            'rounds' =>12
        ]);    

        $data = [
            'name' => 'Victoria',
            'email' => 'recuperacontrasena14@gmail.com',
            'password' => $password
        ];
        DB::table('users')->insert($data);
    }
}
