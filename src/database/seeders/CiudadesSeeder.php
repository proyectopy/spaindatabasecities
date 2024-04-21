<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Proyectopy\Spaindatabasecities\ProcesarDatos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CiudadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {

        // Get Data
        $cities = ProcesarDatos::getCities();

        // Insert Data to Database
        DB::table('cities')->insert($cities);
    }
}
