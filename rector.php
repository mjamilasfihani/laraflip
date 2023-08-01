<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use RectorLaravel\Set\LaravelSetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->sets([
        LaravelSetList::LARAVEL_100,
    ]);

    $rectorConfig->parallel();

    // The paths to refactor (can also be supplied with CLI arguments)
    $rectorConfig->paths([
        __DIR__.'/src',
        __DIR__.'/tests',
    ]);

    if (is_file(__DIR__.'/phpstan.neon')) {
        $rectorConfig->phpstanConfig(__DIR__.'/phpstan.neon');
    }
};
