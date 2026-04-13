<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Warehouse;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ValidationResultValidationError implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?ValidationErrorCharacteristicEnum $characteristic,
        public ?V1Money $restrictionPrice,
        public ?float $restrictionVwc,
        public ?int $templateId,
        public ?ValidationResultValidationErrorTypeEnum $type,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            characteristic: OzonDtoValue::object($payload['characteristic'] ?? null, ValidationErrorCharacteristicEnum::class),
            restrictionPrice: OzonDtoValue::object($payload['restriction_price'] ?? null, V1Money::class),
            restrictionVwc: OzonDtoValue::float($payload['restriction_vwc'] ?? null),
            templateId: OzonDtoValue::int($payload['template_id'] ?? null),
            type: OzonDtoValue::object($payload['type'] ?? null, ValidationResultValidationErrorTypeEnum::class),
            extra: OzonDtoValue::extra($payload, ['characteristic', 'restriction_price', 'restriction_vwc', 'template_id', 'type']),
        );
    }
}
