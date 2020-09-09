<?php

namespace Mizrahi\Domain\Armazenamento;

use Configula\ConfigFactory;
use Illuminate\Contracts\Container\Container;
use Mizrahi\Domain\Armazenamento\Adapters\Contracts\S3AdapterInterface;
use Mizrahi\Domain\Armazenamento\Contracts\ArmazenamentoServiceInterface;

/**
 * Class ArmazenamentoServiceFactory
 * @package Mizrahi\Domain\Armazenamento
 * @author Diego Ananias <diego.ananias@dhsa.dev>
 * @copyright DHSA Technology Inc
 */
class ArmazenamentoServiceFactory
{
    public function __invoke(Container $container)
    {
        $configuracao = $container->get(ConfigFactory::loadPath(__DIR__ . '/config/'));
var_dump($configuracao);die;
        $adapter = $container->get(S3AdapterInterface::class);

        return new ArmazenamentoService($adapter);
    }
}