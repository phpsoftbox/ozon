<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Question;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1QuestionTopSkuResponse implements OzonDtoInterface
{
    /**
     * @param array<array-key, mixed> $sku
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $sku,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            sku: OzonDtoValue::array($payload['sku'] ?? null),
            extra: OzonDtoValue::extra($payload, ['sku']),
        );
    }
}
