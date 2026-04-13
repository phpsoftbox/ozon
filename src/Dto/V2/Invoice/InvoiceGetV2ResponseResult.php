<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Invoice;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class InvoiceGetV2ResponseResult implements OzonDtoInterface
{
    /**
     * @param list<V2HsCode> $hsCodes
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $date,
        public ?string $fileUrl,
        public array $hsCodes,
        public ?string $number,
        public ?float $price,
        public ?string $priceCurrency,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            date: OzonDtoValue::string($payload['date'] ?? null),
            fileUrl: OzonDtoValue::string($payload['file_url'] ?? null),
            hsCodes: OzonDtoValue::objectList($payload['hs_codes'] ?? null, V2HsCode::class),
            number: OzonDtoValue::string($payload['number'] ?? null),
            price: OzonDtoValue::float($payload['price'] ?? null),
            priceCurrency: OzonDtoValue::string($payload['price_currency'] ?? null),
            extra: OzonDtoValue::extra($payload, ['date', 'file_url', 'hs_codes', 'number', 'price', 'price_currency']),
        );
    }
}
