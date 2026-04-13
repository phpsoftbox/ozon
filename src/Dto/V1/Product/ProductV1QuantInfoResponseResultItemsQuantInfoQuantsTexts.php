<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ProductV1QuantInfoResponseResultItemsQuantInfoQuantsTexts implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $stateDescription,
        public ?string $stateName,
        public ?string $stateSysName,
        public ?string $stateTooltip,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            stateDescription: OzonDtoValue::string($payload['state_description'] ?? null),
            stateName: OzonDtoValue::string($payload['state_name'] ?? null),
            stateSysName: OzonDtoValue::string($payload['state_sys_name'] ?? null),
            stateTooltip: OzonDtoValue::string($payload['state_tooltip'] ?? null),
            extra: OzonDtoValue::extra($payload, ['state_description', 'state_name', 'state_sys_name', 'state_tooltip']),
        );
    }
}
