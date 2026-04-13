<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Returns;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetReturnsListResponseLogistic implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $technicalReturnMoment,
        public ?string $finalMoment,
        public ?string $cancelledWithCompensationMoment,
        public ?string $returnDate,
        public ?string $barcode,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            technicalReturnMoment: OzonDtoValue::string($payload['technical_return_moment'] ?? null),
            finalMoment: OzonDtoValue::string($payload['final_moment'] ?? null),
            cancelledWithCompensationMoment: OzonDtoValue::string($payload['cancelled_with_compensation_moment'] ?? null),
            returnDate: OzonDtoValue::string($payload['return_date'] ?? null),
            barcode: OzonDtoValue::string($payload['barcode'] ?? null),
            extra: OzonDtoValue::extra($payload, ['technical_return_moment', 'final_moment', 'cancelled_with_compensation_moment', 'return_date', 'barcode']),
        );
    }
}
