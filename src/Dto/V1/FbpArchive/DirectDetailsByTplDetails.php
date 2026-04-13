<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\FbpArchive;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class DirectDetailsByTplDetails implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $trackingNumber,
        public ?string $transportCompanyName,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            trackingNumber: OzonDtoValue::string($payload['tracking_number'] ?? null),
            transportCompanyName: OzonDtoValue::string($payload['transport_company_name'] ?? null),
            extra: OzonDtoValue::extra($payload, ['tracking_number', 'transport_company_name']),
        );
    }
}
