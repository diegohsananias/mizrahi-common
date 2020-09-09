<?php

namespace Mizrahi\Domain\Armazenamento\Contracts;

/**
 * Class ArmazenamentoServiceInterface
 * @package Mizrahi\Domain\Armazenamento\Contracts
 * @author Diego Ananias <diego.ananias@dhsa.dev>
 * @copyright DHSA Technology Inc
 */
interface ArmazenamentoServiceInterface
{
    /**
     * @param string $nome
     * @return array
     */
    public function criarContainer(string $nome): array;

    /**
     * @param string $data
     * @param string $nomeArquivo
     * @return string
     */
    public function obterLinkArquivo(string $data, string $nomeArquivo): string;

    /**
     * @param string $container
     * @param string $arquivo
     * @return string
     */
    public function salvarArquivo(string $container, string $arquivo): string;
    
    /**
     * @param string $nome
     * @return void
     */
    public function setContainer(string $nome): void;
}