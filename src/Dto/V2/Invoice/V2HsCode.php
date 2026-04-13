<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Invoice;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V2HsCode implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $code,
        public ?string $sku,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            code: OzonDtoValue::string($payload['code'] ?? null),
            sku: OzonDtoValue::string($payload['sku'] ?? null),
            extra: OzonDtoValue::extra($payload, ['code', 'sku']),
        );
    }
}
