<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Posting;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetEtgbResponseResult implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $postingNumber,
        public ?GetEtgbResponseResultEtgb $etgb,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            postingNumber: OzonDtoValue::string($payload['posting_number'] ?? null),
            etgb: OzonDtoValue::object($payload['etgb'] ?? null, GetEtgbResponseResultEtgb::class),
            extra: OzonDtoValue::extra($payload, ['posting_number', 'etgb']),
        );
    }
}
