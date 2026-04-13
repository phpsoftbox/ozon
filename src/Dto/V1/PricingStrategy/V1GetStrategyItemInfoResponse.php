<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\PricingStrategy;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1GetStrategyItemInfoResponse implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?V1GetStrategyItemInfoResponseResult $result,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            result: OzonDtoValue::object($payload['result'] ?? null, V1GetStrategyItemInfoResponseResult::class),
            extra: OzonDtoValue::extra($payload, ['result']),
        );
    }
}
