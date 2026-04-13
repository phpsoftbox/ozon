<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1CreateDocumentB2BSalesJSONReportResponse implements OzonDtoInterface
{
    /**
     * @param list<CreateDocumentB2BSalesJSONReportResponseLegalSaleInvoice> $invoices
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $dateFrom,
        public ?string $dateTo,
        public array $invoices,
        public ?CreateDocumentB2BSalesJSONReportResponseSellerInfo $sellerInfo,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            dateFrom: OzonDtoValue::string($payload['date_from'] ?? null),
            dateTo: OzonDtoValue::string($payload['date_to'] ?? null),
            invoices: OzonDtoValue::objectList($payload['invoices'] ?? null, CreateDocumentB2BSalesJSONReportResponseLegalSaleInvoice::class),
            sellerInfo: OzonDtoValue::object($payload['seller_info'] ?? null, CreateDocumentB2BSalesJSONReportResponseSellerInfo::class),
            extra: OzonDtoValue::extra($payload, ['date_from', 'date_to', 'invoices', 'seller_info']),
        );
    }
}
