<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\ProductCertificate;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ProductCertificateUnbindResponseItem implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $error,
        public ?int $productId,
        public ?bool $updated,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            error: OzonDtoValue::string($payload['error'] ?? null),
            productId: OzonDtoValue::int($payload['product_id'] ?? null),
            updated: OzonDtoValue::bool($payload['updated'] ?? null),
            extra: OzonDtoValue::extra($payload, ['error', 'product_id', 'updated']),
        );
    }
}
