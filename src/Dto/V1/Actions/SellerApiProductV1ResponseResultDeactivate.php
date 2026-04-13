<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Actions;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SellerApiProductV1ResponseResultDeactivate implements OzonDtoInterface
{
    /**
     * @param list<float> $productIds
     * @param list<SellerApiProductV1ResponseProductDeactivate> $rejected
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $productIds,
        public array $rejected,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            productIds: OzonDtoValue::array($payload['product_ids'] ?? null),
            rejected: OzonDtoValue::objectList($payload['rejected'] ?? null, SellerApiProductV1ResponseProductDeactivate::class),
            extra: OzonDtoValue::extra($payload, ['product_ids', 'rejected']),
        );
    }
}
