<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Actions;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ActionsV1ActionsAutoAddProductsUpdateResponseExtremelyLowPrice implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $key,
        public ?float $value,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            key: OzonDtoValue::int($payload['key'] ?? null),
            value: OzonDtoValue::float($payload['value'] ?? null),
            extra: OzonDtoValue::extra($payload, ['key', 'value']),
        );
    }
}
