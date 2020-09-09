<?php

namespace Mizrahi\Domain\Armazenamento;

use Mizrahi\Domain\Armazenamento\Contracts\ArmazenamentoServiceInterface;

/**
 * Class ArmazenamentoService
 * @package Mizrahi\Domain\Armazenamento
 * @author Diego Ananias <diego.ananias@dhsa.dev>
 * @copyright DHSA Technology Inc
 */
class ArmazenamentoService implements ArmazenamentoServiceInterface
{
    /**
     * @var ArmazenamentoServiceInterface
     */
    private ArmazenamentoServiceInterface $adapter;

    /**
     * ArmazenamentoService constructor.
     * @param ArmazenamentoServiceInterface $adapter
     */
    public function __construct(
        ArmazenamentoServiceInterface $adapter
    ) {
        $this->adapter = $adapter;
    }

    /**
     * @inheritDoc
     */
    public function criarContainer(string $nome): bool
    {
        return $this->adapter->criarContainer($nome);
    }

    /**
     * @inheritDoc
     */
    public function obterLinkArquivo(string $data, string $nomeArquivo): string
    {
        // TODO: Implement obterLinkArquivo() method.
    }

    /**
     * @inheritDoc
     */
    public function setContainer(string $nome): void
    {
        // TODO: Implement setContainer() method.
    }

    /**
     * @inheritDoc
     */
    public function salvarArquivo(string $container, string $arquivo): string
    {
        // TODO: Implement salvarArquivo() method.
    }
}