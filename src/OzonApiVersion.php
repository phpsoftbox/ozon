<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon;

use function implode;
use function trim;

final class OzonApiVersion
{
    public function __construct(
        private readonly OzonApiClient $client,
        private readonly string $version,
        private readonly string $section = '',
    ) {
    }

    public function section(string $section): self
    {
        return new self($this->client, $this->version, $section);
    }

    /**
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function get(string $path = '', array $query = []): OzonApiResponse
    {
        return $this->client->get($this->buildPath($path), $query);
    }

    /**
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function post(string $path = '', array $payload = [], array $query = []): OzonApiResponse
    {
        return $this->client->post($this->buildPath($path), $payload, $query);
    }

    /**
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function put(string $path = '', array $payload = [], array $query = []): OzonApiResponse
    {
        return $this->client->put($this->buildPath($path), $payload, $query);
    }

    /**
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function patch(string $path = '', array $payload = [], array $query = []): OzonApiResponse
    {
        return $this->client->patch($this->buildPath($path), $payload, $query);
    }

    /**
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function delete(string $path = '', array $payload = [], array $query = []): OzonApiResponse
    {
        return $this->client->delete($this->buildPath($path), $payload, $query);
    }

    /**
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function request(string $path = '', array $payload = [], string $method = 'POST', array $query = []): OzonApiResponse
    {
        return $this->client->request($this->buildPath($path), $payload, $method, $query);
    }

    private function buildPath(string $path): string
    {
        $segments = [trim($this->version, '/')];
        if ($this->section !== '') {
            $segments[] = trim($this->section, '/');
        }

        $path = trim($path, '/');
        if ($path !== '') {
            $segments[] = $path;
        }

        return implode('/', $segments);
    }
}
