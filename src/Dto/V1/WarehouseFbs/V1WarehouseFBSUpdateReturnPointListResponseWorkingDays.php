<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\WarehouseFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1WarehouseFBSUpdateReturnPointListResponseWorkingDays implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?V1WarehouseFBSUpdateReturnPointListResponseWorkingDaysDayEnum $day,
        public ?string $from,
        public ?string $to,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            day: OzonDtoValue::object($payload['day'] ?? null, V1WarehouseFBSUpdateReturnPointListResponseWorkingDaysDayEnum::class),
            from: OzonDtoValue::string($payload['from'] ?? null),
            to: OzonDtoValue::string($payload['to'] ?? null),
            extra: OzonDtoValue::extra($payload, ['day', 'from', 'to']),
        );
    }
}
