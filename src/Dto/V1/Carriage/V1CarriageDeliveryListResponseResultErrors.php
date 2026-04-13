<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Carriage;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1CarriageDeliveryListResponseResultErrors implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $code,
        public ?string $description,
        public ?string $status,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            code: OzonDtoValue::string($payload['code'] ?? null),
            description: OzonDtoValue::string($payload['description'] ?? null),
            status: OzonDtoValue::string($payload['status'] ?? null),
            extra: OzonDtoValue::extra($payload, ['code', 'description', 'status']),
        );
    }
}
