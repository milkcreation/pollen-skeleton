<?php

declare(strict_types=1);

namespace App\Providers;

use Pollen\Container\BootableServiceProvider;
use Pollen\Support\Env;
use Pollen\View\ViewManagerInterface;

class ViewServiceProvider extends BootableServiceProvider
{
    /**
     * @inheritDoc
     */
    public function boot(): void
    {
        /** @var ViewManagerInterface $view */
        $view = $this->getContainer()->get(ViewManagerInterface::class);
        $cache = !Env::inDev();

        $view
            ->setDefaultEngine('twig')
            ->setDirectory(dirname(__DIR__, 2) . '/resources/views')
            ->setCacheDir($cache ? dirname(__DIR__, 2) . "/var/cache/views": null);
    }
}
