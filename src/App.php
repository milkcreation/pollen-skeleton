<?php

declare(strict_types=1);

namespace App;

use App\Config\ConfigServiceProvider;
use Pollen\Debug\DebugServiceProvider;
use Pollen\Kernel\Application;
use Pollen\Routing\RoutingServiceProvider;

class App extends Application
{
    public function getServiceProviders(): array
    {
        return [
            // Components
            DebugServiceProvider::class,
            RoutingServiceProvider::class,
            // Application
            ConfigServiceProvider::class
        ];
    }
}