<?php

/*
 * SpainDatabaseCities.
 *
 * (c) Wild South <proyectopy.es | proyectopy@gmx.es>
 *
 */

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SpainSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PaisesSeeder::class);
        $this->call(ProvinciasSeeder::class);
        $this->call(CiudadesSeeder::class);
    }
}
