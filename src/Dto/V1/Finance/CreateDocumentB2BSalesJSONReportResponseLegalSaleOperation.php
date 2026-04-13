<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CreateDocumentB2BSalesJSONReportResponseLegalSaleOperation implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $amount,
        public ?float $costWithoutVat,
        public ?string $date,
        public ?string $gtdNumber,
        public ?string $originCountry,
        public ?string $postingNumber,
        public ?float $price,
        public ?int $quantity,
        public ?string $rnptNumber,
        public ?CreateDocumentB2BSalesJSONReportResponseLegalSaleOperationType $type,
        public ?float $vatAmount,
        public ?float $vatRate,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            amount: OzonDtoValue::float($payload['amount'] ?? null),
            costWithoutVat: OzonDtoValue::float($payload['cost_without_vat'] ?? null),
            date: OzonDtoValue::string($payload['date'] ?? null),
            gtdNumber: OzonDtoValue::string($payload['gtd_number'] ?? null),
            originCountry: OzonDtoValue::string($payload['origin_country'] ?? null),
            postingNumber: OzonDtoValue::string($payload['posting_number'] ?? null),
            price: OzonDtoValue::float($payload['price'] ?? null),
            quantity: OzonDtoValue::int($payload['quantity'] ?? null),
            rnptNumber: OzonDtoValue::string($payload['rnpt_number'] ?? null),
            type: OzonDtoValue::object($payload['type'] ?? null, CreateDocumentB2BSalesJSONReportResponseLegalSaleOperationType::class),
            vatAmount: OzonDtoValue::float($payload['vat_amount'] ?? null),
            vatRate: OzonDtoValue::float($payload['vat_rate'] ?? null),
            extra: OzonDtoValue::extra($payload, ['amount', 'cost_without_vat', 'date', 'gtd_number', 'origin_country', 'posting_number', 'price', 'quantity', 'rnpt_number', 'type', 'vat_amount', 'vat_rate']),
        );
    }
}
