<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Rating;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ListFBSRatingIndexPostingsV1ResponseError implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $chargePercent,
        public ?float $chargePrice,
        public ?string $chargePriceCurrencyCode,
        public ?string $deliverySchema,
        public ?string $errorAt,
        public ?bool $hasGraceStatus,
        public ?float $index,
        public ?PostingErrorTypeEnum $postingErrorType,
        public ?string $postingNumber,
        public ?float $productPrice,
        public ?string $productPriceCurrencyCode,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            chargePercent: OzonDtoValue::float($payload['charge_percent'] ?? null),
            chargePrice: OzonDtoValue::float($payload['charge_price'] ?? null),
            chargePriceCurrencyCode: OzonDtoValue::string($payload['charge_price_currency_code'] ?? null),
            deliverySchema: OzonDtoValue::string($payload['delivery_schema'] ?? null),
            errorAt: OzonDtoValue::string($payload['error_at'] ?? null),
            hasGraceStatus: OzonDtoValue::bool($payload['has_grace_status'] ?? null),
            index: OzonDtoValue::float($payload['index'] ?? null),
            postingErrorType: OzonDtoValue::object($payload['posting_error_type'] ?? null, PostingErrorTypeEnum::class),
            postingNumber: OzonDtoValue::string($payload['posting_number'] ?? null),
            productPrice: OzonDtoValue::float($payload['product_price'] ?? null),
            productPriceCurrencyCode: OzonDtoValue::string($payload['product_price_currency_code'] ?? null),
            extra: OzonDtoValue::extra($payload, ['charge_percent', 'charge_price', 'charge_price_currency_code', 'delivery_schema', 'error_at', 'has_grace_status', 'index', 'posting_error_type', 'posting_number', 'product_price', 'product_price_currency_code']),
        );
    }
}
