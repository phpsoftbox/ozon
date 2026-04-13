<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\DeliveryMethod;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1GetDeliveryMethodReturnSettingsV1Response implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?GetDeliveryMethodReturnSettingsV1ResponseReturnSetting $settings,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            settings: OzonDtoValue::object($payload['settings'] ?? null, GetDeliveryMethodReturnSettingsV1ResponseReturnSetting::class),
            extra: OzonDtoValue::extra($payload, ['settings']),
        );
    }
}
