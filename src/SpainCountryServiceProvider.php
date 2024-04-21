<?php

/*
 * SpainDatabaseCities
 *
 * (c) Wild South <proyectopy.es | proyectopy@gmx.es>
 *
 */


namespace Proyectopy\Spaindatabasecities;

use Illuminate\Support\ServiceProvider;
use Proyectopy\Spaindatabasecities\SpainCountryPublishCommand;

/**
 * SpainCountry Service Provider
 */
class SpainCountryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                SpainCountryPublishCommand::class,
            ]);
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
