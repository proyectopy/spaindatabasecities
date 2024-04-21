<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Proyectopy\Spaindatabasecities\ProcesarDatos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProvinciasSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Get Data
        $states = ProcesarDatos::getStates();

        // Insert Data to Database
        DB::table('states')->insert($states);
    }
}
