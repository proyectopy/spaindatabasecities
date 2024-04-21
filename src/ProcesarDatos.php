<?php

/*
 * SpainDatabaseCities.
 *
 * (c) Wild South <proyectopy.es | proyectopy@gmx.es>
 *
 */

namespace Proyectopy\Spaindatabasecities;

use ParseCsv\Csv;

/**
 * Get raw data from CSV Files on /src/data/csv.
 */
class ProcesarDatos
{
    /**
     * Raw Data file path.
     *
     * @return string
     */
    protected static $path = __DIR__.'/data/csv';

    /**
     * Get countries data.
     *
     * @return array
     */
    public static function getCountries()
    {
        $result = self::getCsvData(self::$path.'/countries.csv');

        return $result;
    }

    /**
     * Get villages data.
     *
     * @return array
     */
    public static function getStates()
    {
        $result = self::getCsvData(self::$path.'/states.csv');

        return $result;
    }

    /**
     * Get cities data.
     *
     * @return array
     */
    public static function getCities()
    {
        $result = self::getCsvData(self::$path.'/cities.csv');

        return $result;
    }


    /**
     * Get Data from CSV.
     *
     * @param string $path File Path.
     *
     * @return array
     */
    public static function getCsvData($path = '')
    {
        $csv = new Csv();
        $csv->auto($path);

        return $csv->data;
    }
}
