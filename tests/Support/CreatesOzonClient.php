<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\Tests\Support;

use PhpSoftBox\Http\Message\RequestFactory;
use PhpSoftBox\Http\Message\StreamFactory;
use PhpSoftBox\Ozon\OzonApiClient;
use Psr\Http\Message\ResponseInterface;

trait CreatesOzonClient
{
    /**
     * @return array{0: OzonApiClient, 1: FakeHttpClient}
     */
    private function createClient(ResponseInterface|array $response): array
    {
        $httpClient = new FakeHttpClient($response);

        $client = new OzonApiClient(
            clientId: '12345',
            apiKey: 'secret-key',
            httpClient: $httpClient,
            requestFactory: new RequestFactory(),
            streamFactory: new StreamFactory(),
        );

        return [$client, $httpClient];
    }
}
