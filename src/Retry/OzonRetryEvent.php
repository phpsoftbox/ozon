<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\Retry;

final readonly class OzonRetryEvent
{
    public function __construct(
        /** Number of the request attempt that will run after the delay. */
        public int $attempt,
        public float $delaySeconds,
        public string $method,
        public string $endpoint,
        public int $statusCode,
    ) {
    }
}
