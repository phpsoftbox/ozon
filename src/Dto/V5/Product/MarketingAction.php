<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\Dto\V5\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class MarketingAction implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $dateFrom,
        public ?string $dateTo,
        public ?string $title,
        public ?int $value,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            dateFrom: OzonDtoValue::string($payload['date_from'] ?? null),
            dateTo: OzonDtoValue::string($payload['date_to'] ?? null),
            title: OzonDtoValue::string($payload['title'] ?? null),
            value: OzonDtoValue::int($payload['value'] ?? null),
            extra: OzonDtoValue::extra($payload, ['date_from', 'date_to', 'title', 'value']),
        );
    }
}
