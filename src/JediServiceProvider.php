<?php

namespace Uspdev\RebelAlliance;

use Illuminate\Support\ServiceProvider;

class JediServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                Console\UseTheForce::class,
            ]);
        }
    }
}
