<?php

declare(strict_types=1);

namespace Hopasports\BladeSporttypeIcons\Tests;

use Hopasports\BladeSporttypeIcons\BladeSporttypeIconsServiceProvider;
use BladeUI\Icons\BladeIconsServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            BladeIconsServiceProvider::class,
            BladeSporttypeIconsServiceProvider::class,
        ];
    }
}
