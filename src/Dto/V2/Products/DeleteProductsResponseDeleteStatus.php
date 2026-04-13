<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Products;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class DeleteProductsResponseDeleteStatus implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $error,
        public ?bool $isDeleted,
        public ?string $offerId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            error: OzonDtoValue::string($payload['error'] ?? null),
            isDeleted: OzonDtoValue::bool($payload['is_deleted'] ?? null),
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['error', 'is_deleted', 'offer_id']),
        );
    }
}
