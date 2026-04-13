<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V3Addressee implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $name,
        public ?string $phone,
        public ?string $pin,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            name: OzonDtoValue::string($payload['name'] ?? null),
            phone: OzonDtoValue::string($payload['phone'] ?? null),
            pin: OzonDtoValue::string($payload['pin'] ?? null),
            extra: OzonDtoValue::extra($payload, ['name', 'phone', 'pin']),
        );
    }
}
