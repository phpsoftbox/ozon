<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Posting;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PostingV2PostingDigitalListResponsePostingsFinancialData implements OzonDtoInterface
{
    /**
     * @param list<PostingV2PostingDigitalListResponsePostingsFinancialDataProducts> $products
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $clusterFrom,
        public ?string $clusterTo,
        public array $products,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            clusterFrom: OzonDtoValue::string($payload['cluster_from'] ?? null),
            clusterTo: OzonDtoValue::string($payload['cluster_to'] ?? null),
            products: OzonDtoValue::objectList($payload['products'] ?? null, PostingV2PostingDigitalListResponsePostingsFinancialDataProducts::class),
            extra: OzonDtoValue::extra($payload, ['cluster_from', 'cluster_to', 'products']),
        );
    }
}
