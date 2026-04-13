<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\DeliveryMethod;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ReturnSettingTransportCompanyDetails implements OzonDtoInterface
{
    /**
     * @param list<string> $transportCompanyNames
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $transportCompanyNames,
        public ?string $zipcode,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            transportCompanyNames: OzonDtoValue::array($payload['transport_company_names'] ?? null),
            zipcode: OzonDtoValue::string($payload['zipcode'] ?? null),
            extra: OzonDtoValue::extra($payload, ['transport_company_names', 'zipcode']),
        );
    }
}
