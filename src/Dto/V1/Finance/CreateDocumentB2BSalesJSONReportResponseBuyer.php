<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CreateDocumentB2BSalesJSONReportResponseBuyer implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $name,
        public ?string $address,
        public ?string $inn,
        public ?string $kpp,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            name: OzonDtoValue::string($payload['name'] ?? null),
            address: OzonDtoValue::string($payload['address'] ?? null),
            inn: OzonDtoValue::string($payload['inn'] ?? null),
            kpp: OzonDtoValue::string($payload['kpp'] ?? null),
            extra: OzonDtoValue::extra($payload, ['name', 'address', 'inn', 'kpp']),
        );
    }
}
