<?php

namespace Farrokhpakravan\Mt5PhpClient;

use Illuminate\Support\ServiceProvider;

class Mt5PhpClientServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('mt5-php-client.php'),
            ]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'mt5-php-client');

        // Register the main class to use with the facade
        $this->app->singleton('MT5Client', function () {
            return new Mt5PhpClient();
        });
    }
}
