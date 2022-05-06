<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(ActividadSeeder::class);
        $this->call(CabanaSeeder::class);
        $this->call(ComidaSeeder::class);
        $this->call(ReservasActividadesSeeder::class);
        $this->call(ReservasComidasSeeder::class);
   
    }
}
