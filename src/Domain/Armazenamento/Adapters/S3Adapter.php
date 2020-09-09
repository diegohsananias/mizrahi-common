<?php

namespace Mizrahi\Domain\Armazenamento\Adapters;

use Aws\Exception\AwsException;
use Aws\S3\S3Client;
use Aws\S3\S3ClientInterface;
use Aws\Sdk;
use Mizrahi\Domain\Armazenamento\Adapters\Contracts\S3AdapterInterface;

/**
 * Class S3Adapter
 * @package Mizrahi\Domain\Armazenamento\Adapters
 * @author Diego Ananias <diego.ananias@dhsa.dev>
 * @copyright DHSA Technology Inc
 */
class S3Adapter implements S3AdapterInterface
{
    private S3ClientInterface $s3Client;

    public function __construct(S3ClientInterface $s3Client) {

    }


    /**
     * @inheritDoc
     */
    public function criarContainer(string $nome): array
    {
        try {
            $result = $this->s3Client->createBucket([
                'Bucket' => $nome,
            ]);

            return [
                'Location' => $result['Location'],
                'URI' => $result['@metadata']['effectiveUri']
            ];
        } catch (AwsException $e) {
            return [
                'Error' => $e->getAwsErrorMessage()
            ];
        }
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
        $response = $this->s3Client->putObject(array(
            'Bucket' => $container,
            'Key'    => $_FILES['file']['name'],
            'SourceFile' => $_FILES['file']['tmp_name'],
        ));

        if (!$response) {
            return false;
        }

        return true;
    }
}