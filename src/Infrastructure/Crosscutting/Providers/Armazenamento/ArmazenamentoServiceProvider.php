<?php

namespace Mizrahi\Infrastructure\Crosscutting\Providers\Armazenamento;

use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;
use Mizrahi\Domain\Armazenamento\ArmazenamentoServiceFactory;
use Mizrahi\Domain\Armazenamento\Contracts\ArmazenamentoServiceInterface;

/**
 * Class ArmazenamentoServiceProvider
 * @package Mizrahi\Infrastructure\Crosscutting\Providers\Armazenamento
 * @author Diego Ananias <diego.ananias@dhsa.dev>
 * @copyright DHSA Technology Inc
 */
class ArmazenamentoServiceProvider extends ServiceProvider
{
    public function boot()
    {
        
    }

    public function register()
    {
        $this->app->bind(
            ArmazenamentoServiceInterface::class,
            ArmazenamentoServiceFactory::class
        );
    }
}