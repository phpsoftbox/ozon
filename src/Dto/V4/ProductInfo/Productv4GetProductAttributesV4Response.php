<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V4\ProductInfo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class Productv4GetProductAttributesV4Response implements OzonDtoInterface
{
    /**
     * @param list<Productv4GetProductAttributesV4ResponseResult> $result
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $result,
        public ?string $lastId,
        public ?string $total,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            result: OzonDtoValue::objectList($payload['result'] ?? null, Productv4GetProductAttributesV4ResponseResult::class),
            lastId: OzonDtoValue::string($payload['last_id'] ?? null),
            total: OzonDtoValue::string($payload['total'] ?? null),
            extra: OzonDtoValue::extra($payload, ['result', 'last_id', 'total']),
        );
    }
}
