<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V4\ProductInfo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V4GetProductAttributesResponseModelInfo implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $modelId,
        public ?int $count,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            modelId: OzonDtoValue::int($payload['model_id'] ?? null),
            count: OzonDtoValue::int($payload['count'] ?? null),
            extra: OzonDtoValue::extra($payload, ['model_id', 'count']),
        );
    }
}
