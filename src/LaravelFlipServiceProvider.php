<?php

declare(strict_types=1);

namespace Kitakode\LaravelFlip;

use Illuminate\Support\ServiceProvider;

class LaravelFlipServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/kitakode-laraflip.php' => config_path('kitakode-laraflip.php'),
        ]);

        $this->mergeConfigFrom(__DIR__.'/../config/kitakode-laraflip.php', 'kitakode-laraflip');
    }
}
