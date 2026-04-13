<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V3Customer implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?V3Address $address,
        public ?int $customerId,
        public ?string $name,
        public ?string $phone,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            address: OzonDtoValue::object($payload['address'] ?? null, V3Address::class),
            customerId: OzonDtoValue::int($payload['customer_id'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            phone: OzonDtoValue::string($payload['phone'] ?? null),
            extra: OzonDtoValue::extra($payload, ['address', 'customer_id', 'name', 'phone']),
        );
    }
}
