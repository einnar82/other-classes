<?php

namespace RannieOllit\OtherClasses;

use Illuminate\Support\ServiceProvider;
use RannieOllit\OtherClasses\Commands\MakeTraitCommand;
use RannieOllit\OtherClasses\Commands\MakeContractsCommand;
use RannieOllit\OtherClasses\Commands\MakeRepositoryCommand;
use RannieOllit\OtherClasses\Commands\MakeServicesCommand;

class OtherClassesServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {

    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Registering package commands.
        $this->commands([
            MakeTraitCommand::class,
            MakeContractsCommand::class,
            MakeRepositoryCommand::class,
            MakeServicesCommand::class
        ]);
        $this->publishes([
            __DIR__.'\other-classes.php' => config_path('other-classes.php'),
        ], 'config');
    }
}
