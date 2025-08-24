<?php declare(strict_types=1);

use Rector\Config\RectorConfig;
use RectorLaravel\Set\LaravelLevelSetList;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/public',
        __DIR__ . '/bootstrap',
        __DIR__ . '/app',
        __DIR__ . '/config',
        __DIR__ . '/database',
        __DIR__ . '/routes',

    ])
    ->withSets([
        LaravelLevelSetList::UP_TO_LARAVEL_100,
    ]);
