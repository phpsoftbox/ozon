<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1StocksImportResponse implements OzonDtoInterface
{
    /**
     * @param list<StocksImportResponseItemStatus> $status
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $status,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            status: OzonDtoValue::objectList($payload['status'] ?? null, StocksImportResponseItemStatus::class),
            extra: OzonDtoValue::extra($payload, ['status']),
        );
    }
}
