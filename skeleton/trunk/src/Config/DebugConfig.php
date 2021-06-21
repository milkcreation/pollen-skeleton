<?php

declare(strict_types=1);

namespace App\Config;

use Pollen\Debug\DebugManagerInterface;
use Pollen\Support\Env;

class DebugConfig
{
    protected DebugManagerInterface $debug;

    /**
     * @param DebugManagerInterface $debug
     */
    public function __construct(DebugManagerInterface $debug)
    {
        $this->debug = $debug;

        if (Env::isDev()) {
            $this->debug->errorHandler()->enable();
            $this->debug->debugBar()->enable();
        }
    }
}