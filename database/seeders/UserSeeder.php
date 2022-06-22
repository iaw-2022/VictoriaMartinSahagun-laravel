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
        DB::table('users')->insert([
            'name'=>'admin',
            'email'=>'admin@admin.com',
            'email_verified_at' => now(),
            'password'=>bcrypt('admin'),
            'rol'=>'admin'
        ]);

        DB::table('users')->insert([
            'name'=>'adminComidas',
            'email'=>'adminComidas@admin.com',
            'email_verified_at' => now(),
            'password'=>bcrypt('adminComidas'),
            'rol'=>'adminComidas'
        ]);

        DB::table('users')->insert([
            'name'=>'adminActividades',
            'email'=>'adminActividades@admin.com',
            'email_verified_at' => now(),
            'password'=>bcrypt('adminActividades'),
            'rol'=>'adminActividades'
        ]);
    }
}
