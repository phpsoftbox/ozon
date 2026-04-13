<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class FbsPostingDetailPrrOption implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $code,
        public ?string $price,
        public ?string $currencyCode,
        public ?string $floor,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            code: OzonDtoValue::string($payload['code'] ?? null),
            price: OzonDtoValue::string($payload['price'] ?? null),
            currencyCode: OzonDtoValue::string($payload['currency_code'] ?? null),
            floor: OzonDtoValue::string($payload['floor'] ?? null),
            extra: OzonDtoValue::extra($payload, ['code', 'price', 'currency_code', 'floor']),
        );
    }
}
