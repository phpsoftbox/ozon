<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\ProductInfo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetProductInfoListResponseModelInfo implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $count,
        public ?int $modelId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            count: OzonDtoValue::int($payload['count'] ?? null),
            modelId: OzonDtoValue::int($payload['model_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['count', 'model_id']),
        );
    }
}
