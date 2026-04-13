<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CreateDocumentB2BSalesJSONReportResponseLegalSaleInvoice implements OzonDtoInterface
{
    /**
     * @param list<CreateDocumentB2BSalesJSONReportResponseLegalSaleOperation> $operations
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?CreateDocumentB2BSalesJSONReportResponseBuyer $buyerInfo,
        public ?string $currency,
        public ?int $currencyCode,
        public ?CreateDocumentB2BSalesJSONReportResponseInvoiceInfo $info,
        public ?string $offerId,
        public array $operations,
        public ?string $productName,
        public ?int $sku,
        public ?int $unitCode,
        public ?string $unitName,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            buyerInfo: OzonDtoValue::object($payload['buyer_info'] ?? null, CreateDocumentB2BSalesJSONReportResponseBuyer::class),
            currency: OzonDtoValue::string($payload['currency'] ?? null),
            currencyCode: OzonDtoValue::int($payload['currency_code'] ?? null),
            info: OzonDtoValue::object($payload['info'] ?? null, CreateDocumentB2BSalesJSONReportResponseInvoiceInfo::class),
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            operations: OzonDtoValue::objectList($payload['operations'] ?? null, CreateDocumentB2BSalesJSONReportResponseLegalSaleOperation::class),
            productName: OzonDtoValue::string($payload['product_name'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            unitCode: OzonDtoValue::int($payload['unit_code'] ?? null),
            unitName: OzonDtoValue::string($payload['unit_name'] ?? null),
            extra: OzonDtoValue::extra($payload, ['buyer_info', 'currency', 'currency_code', 'info', 'offer_id', 'operations', 'product_name', 'sku', 'unit_code', 'unit_name']),
        );
    }
}
