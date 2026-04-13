<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class FbsPostingDetailCourier implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $carModel,
        public ?string $carNumber,
        public ?string $name,
        public ?string $phone,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            carModel: OzonDtoValue::string($payload['car_model'] ?? null),
            carNumber: OzonDtoValue::string($payload['car_number'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            phone: OzonDtoValue::string($payload['phone'] ?? null),
            extra: OzonDtoValue::extra($payload, ['car_model', 'car_number', 'name', 'phone']),
        );
    }
}
