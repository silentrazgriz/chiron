<?php

namespace Gaia\Chiron;

use Illuminate\Support\ServiceProvider;

class ChironServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(resource_path('views/vendor/chiron'), 'chiron');
        $this->loadViewsFrom(realpath(__DIR__ . '/resources/views'), 'chiron');
        $this->publishes([
            __DIR__ . '/resources/views' => resource_path('views/vendor/chiron'),
            __DIR__ . '/public' => public_path(),
            __DIR__ . '/config' => config_path()
        ]);
    }
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }
}