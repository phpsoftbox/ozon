<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V3FbsPostingExemplarProductV3 implements OzonDtoInterface
{
    /**
     * @param list<V3FbsPostingProductExemplarInfoV3> $exemplars
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $exemplars,
        public ?int $sku,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            exemplars: OzonDtoValue::objectList($payload['exemplars'] ?? null, V3FbsPostingProductExemplarInfoV3::class),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            extra: OzonDtoValue::extra($payload, ['exemplars', 'sku']),
        );
    }
}
