<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Proyectopy\Spaindatabasecities\ProcesarDatos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PaisesSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Get Data
        $countries = ProcesarDatos::getCountries();

        // Insert Data to Database
        DB::table('countries')->insert($countries);
    }
}
