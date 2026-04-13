<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Posting;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetEtgbResponseResultEtgb implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $number,
        public ?string $date,
        public ?string $url,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            number: OzonDtoValue::string($payload['number'] ?? null),
            date: OzonDtoValue::string($payload['date'] ?? null),
            url: OzonDtoValue::string($payload['url'] ?? null),
            extra: OzonDtoValue::extra($payload, ['number', 'date', 'url']),
        );
    }
}
