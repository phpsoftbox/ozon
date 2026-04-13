<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Seller;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SellerInfoResponseCompany implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $country,
        public ?string $currency,
        public ?string $inn,
        public ?string $legalName,
        public ?string $name,
        public ?string $ogrn,
        public ?string $ownershipForm,
        public ?CompanyTaxSystemEnum $taxSystem,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            country: OzonDtoValue::string($payload['country'] ?? null),
            currency: OzonDtoValue::string($payload['currency'] ?? null),
            inn: OzonDtoValue::string($payload['inn'] ?? null),
            legalName: OzonDtoValue::string($payload['legal_name'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            ogrn: OzonDtoValue::string($payload['ogrn'] ?? null),
            ownershipForm: OzonDtoValue::string($payload['ownership_form'] ?? null),
            taxSystem: OzonDtoValue::object($payload['tax_system'] ?? null, CompanyTaxSystemEnum::class),
            extra: OzonDtoValue::extra($payload, ['country', 'currency', 'inn', 'legal_name', 'name', 'ogrn', 'ownership_form', 'tax_system']),
        );
    }
}
