<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon;

use RuntimeException;

final class OzonException extends RuntimeException
{
    /**
     * @param array<string, mixed> $payload
     */
    public function __construct(
        string $message,
        private readonly ?int $statusCode = null,
        private readonly array $payload = [],
    ) {
        parent::__construct($message, $statusCode ?? 0);
    }

    public function statusCode(): ?int
    {
        return $this->statusCode;
    }

    /**
     * @return array<string, mixed>
     */
    public function payload(): array
    {
        return $this->payload;
    }
}
