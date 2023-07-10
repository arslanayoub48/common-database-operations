<?php

namespace Common\DatabaseOperations;

use Illuminate\Support\ServiceProvider;

class CommonDatabaseOperationsProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/Traits/CommonDatabaseOperations.php');
        $this->publishes([
            __DIR__ . '/Traits/CommonDatabaseOperations.php' => app_path('Traits/CommonDatabaseOperations.php'),
        ]);
    }
}
