<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CargoesV1CargoesLabelTransportByOrderStatusResponseResult implements OzonDtoInterface
{
    /**
     * @param list<string> $skippedSuppliesIds
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $fileUrl,
        public array $skippedSuppliesIds,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            fileUrl: OzonDtoValue::string($payload['file_url'] ?? null),
            skippedSuppliesIds: OzonDtoValue::array($payload['skipped_supplies_ids'] ?? null),
            extra: OzonDtoValue::extra($payload, ['file_url', 'skipped_supplies_ids']),
        );
    }
}
