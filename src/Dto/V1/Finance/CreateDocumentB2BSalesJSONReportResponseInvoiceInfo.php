<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CreateDocumentB2BSalesJSONReportResponseInvoiceInfo implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $date,
        public ?string $number,
        public ?string $status,
        public ?CreateDocumentB2BSalesJSONReportResponseInvoiceInfoType $type,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            date: OzonDtoValue::string($payload['date'] ?? null),
            number: OzonDtoValue::string($payload['number'] ?? null),
            status: OzonDtoValue::string($payload['status'] ?? null),
            type: OzonDtoValue::object($payload['type'] ?? null, CreateDocumentB2BSalesJSONReportResponseInvoiceInfoType::class),
            extra: OzonDtoValue::extra($payload, ['date', 'number', 'status', 'type']),
        );
    }
}
