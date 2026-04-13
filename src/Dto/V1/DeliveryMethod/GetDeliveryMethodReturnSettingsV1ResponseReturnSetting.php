<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\DeliveryMethod;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetDeliveryMethodReturnSettingsV1ResponseReturnSetting implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?ReturnSettingCourierDetails $courierDetails,
        public ?string $postOfficeZipcode,
        public ?ReturnSettingTransportCompanyDetails $transportCompanyDetails,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            courierDetails: OzonDtoValue::object($payload['courier_details'] ?? null, ReturnSettingCourierDetails::class),
            postOfficeZipcode: OzonDtoValue::string($payload['post_office_zipcode'] ?? null),
            transportCompanyDetails: OzonDtoValue::object($payload['transport_company_details'] ?? null, ReturnSettingTransportCompanyDetails::class),
            extra: OzonDtoValue::extra($payload, ['courier_details', 'post_office_zipcode', 'transport_company_details']),
        );
    }
}
