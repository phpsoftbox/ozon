<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetRealizationReportResponseV2Header implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $contractDate,
        public ?string $contractNumber,
        public ?string $currencySysName,
        public ?string $docDate,
        public ?string $number,
        public ?string $payerInn,
        public ?string $payerKpp,
        public ?string $payerName,
        public ?string $receiverInn,
        public ?string $receiverKpp,
        public ?string $receiverName,
        public ?string $startDate,
        public ?string $stopDate,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            contractDate: OzonDtoValue::string($payload['contract_date'] ?? null),
            contractNumber: OzonDtoValue::string($payload['contract_number'] ?? null),
            currencySysName: OzonDtoValue::string($payload['currency_sys_name'] ?? null),
            docDate: OzonDtoValue::string($payload['doc_date'] ?? null),
            number: OzonDtoValue::string($payload['number'] ?? null),
            payerInn: OzonDtoValue::string($payload['payer_inn'] ?? null),
            payerKpp: OzonDtoValue::string($payload['payer_kpp'] ?? null),
            payerName: OzonDtoValue::string($payload['payer_name'] ?? null),
            receiverInn: OzonDtoValue::string($payload['receiver_inn'] ?? null),
            receiverKpp: OzonDtoValue::string($payload['receiver_kpp'] ?? null),
            receiverName: OzonDtoValue::string($payload['receiver_name'] ?? null),
            startDate: OzonDtoValue::string($payload['start_date'] ?? null),
            stopDate: OzonDtoValue::string($payload['stop_date'] ?? null),
            extra: OzonDtoValue::extra($payload, ['contract_date', 'contract_number', 'currency_sys_name', 'doc_date', 'number', 'payer_inn', 'payer_kpp', 'payer_name', 'receiver_inn', 'receiver_kpp', 'receiver_name', 'start_date', 'stop_date']),
        );
    }
}
