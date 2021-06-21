<?php

declare(strict_types=1);

namespace App\Config;

use Pollen\Routing\RouterInterface;
use Pollen\View\ViewEngine;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class RoutingConfig
{
    protected RouterInterface $router;

    /**
     * @var string twig|plates
     */
    protected string $engine = 'twig';

    /**
     * @param RouterInterface $router
     */
    public function __construct(RouterInterface $router)
    {
        $this->router = $router;

        $this->router->get(
            '/',
            function () {
                $viewDir = dirname(__DIR__, 2) . '/resources/views/';
                $datas = [
                    'title' => 'Welcome',
                    'name'  => 'Home',
                ];

                if ($this->engine === 'twig') {
                    $view = new Environment(new FilesystemLoader($viewDir), ['cache' => false]);
                    $tmpl = 'index.html.twig';
                } else {
                    $view = (new ViewEngine())->setDirectory($viewDir);
                    $tmpl = 'index.plates';
                }

                return $view->render($tmpl, $datas);
            }
        );
    }
}