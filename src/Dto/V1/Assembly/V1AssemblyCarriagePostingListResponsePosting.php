<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Assembly;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1AssemblyCarriagePostingListResponsePosting implements OzonDtoInterface
{
    /**
     * @param list<V1AssemblyCarriagePostingListResponsePostingProduct> $products
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $assemblyCode,
        public ?bool $canPrintLabel,
        public ?string $postingNumber,
        public array $products,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            assemblyCode: OzonDtoValue::string($payload['assembly_code'] ?? null),
            canPrintLabel: OzonDtoValue::bool($payload['can_print_label'] ?? null),
            postingNumber: OzonDtoValue::string($payload['posting_number'] ?? null),
            products: OzonDtoValue::objectList($payload['products'] ?? null, V1AssemblyCarriagePostingListResponsePostingProduct::class),
            extra: OzonDtoValue::extra($payload, ['assembly_code', 'can_print_label', 'posting_number', 'products']),
        );
    }
}
