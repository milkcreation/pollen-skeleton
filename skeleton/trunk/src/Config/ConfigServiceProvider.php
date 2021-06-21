<?php

declare(strict_types=1);

namespace App\Config;

use Pollen\Container\BootableServiceProvider;
use Pollen\Debug\DebugManagerInterface;
use Pollen\Routing\RouterInterface;

class ConfigServiceProvider extends BootableServiceProvider
{
    /**
     * @inheritDoc
     */
    public function boot(): void
    {
        $app = $this->getContainer();
        $app->share(DebugConfig::class, new DebugConfig($app->get(DebugManagerInterface::class)));
        $app->share(RoutingConfig::class, new RoutingConfig($app->get(RouterInterface::class)));
    }
}