<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1PostingFbsProductTraceableAttributeResponseProduct implements OzonDtoInterface
{
    /**
     * @param list<string> $requiredAttributes
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $requiredAttributes,
        public ?int $sku,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            requiredAttributes: OzonDtoValue::array($payload['required_attributes'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            extra: OzonDtoValue::extra($payload, ['required_attributes', 'sku']),
        );
    }
}
