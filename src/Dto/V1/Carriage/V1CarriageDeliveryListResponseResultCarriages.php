<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Carriage;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1CarriageDeliveryListResponseResultCarriages implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $id,
        public ?int $postingsCount,
        public ?int $quantumCount,
        public ?string $status,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: OzonDtoValue::string($payload['id'] ?? null),
            postingsCount: OzonDtoValue::int($payload['postings_count'] ?? null),
            quantumCount: OzonDtoValue::int($payload['quantum_count'] ?? null),
            status: OzonDtoValue::string($payload['status'] ?? null),
            extra: OzonDtoValue::extra($payload, ['id', 'postings_count', 'quantum_count', 'status']),
        );
    }
}
