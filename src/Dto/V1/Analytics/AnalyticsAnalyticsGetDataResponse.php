<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Analytics;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class AnalyticsAnalyticsGetDataResponse implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?AnalyticsGetDataResponseResult $result,
        public ?string $timestamp,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            result: OzonDtoValue::object($payload['result'] ?? null, AnalyticsGetDataResponseResult::class),
            timestamp: OzonDtoValue::string($payload['timestamp'] ?? null),
            extra: OzonDtoValue::extra($payload, ['result', 'timestamp']),
        );
    }
}
