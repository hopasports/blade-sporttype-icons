<?php

declare(strict_types=1);

namespace Hopasports\BladeSporttypeIcons;

use BladeUI\Icons\Factory;
use Illuminate\Support\ServiceProvider;

final class BladeSporttypeIconsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->callAfterResolving(Factory::class, function (Factory $factory) {
            $factory->add('sporttypes', [
                'path' => __DIR__.'/../resources/svg',
                'prefix' => 'sporttype',
            ]);
        });
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/svg' => public_path('vendor/blade-sporttype-icons'),
            ], 'blade-sporttype-icons');
        }
    }
}
