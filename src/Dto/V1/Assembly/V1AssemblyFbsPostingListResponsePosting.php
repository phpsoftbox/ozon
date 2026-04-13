<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Assembly;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1AssemblyFbsPostingListResponsePosting implements OzonDtoInterface
{
    /**
     * @param list<V1AssemblyFbsPostingListResponsePostingProduct> $products
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $assemblyCode,
        public ?string $postingNumber,
        public array $products,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            assemblyCode: OzonDtoValue::string($payload['assembly_code'] ?? null),
            postingNumber: OzonDtoValue::string($payload['posting_number'] ?? null),
            products: OzonDtoValue::objectList($payload['products'] ?? null, V1AssemblyFbsPostingListResponsePostingProduct::class),
            extra: OzonDtoValue::extra($payload, ['assembly_code', 'posting_number', 'products']),
        );
    }
}
