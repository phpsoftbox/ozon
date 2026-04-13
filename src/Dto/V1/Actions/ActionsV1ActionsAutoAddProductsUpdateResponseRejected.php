<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Actions;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ActionsV1ActionsAutoAddProductsUpdateResponseRejected implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?ActionsV1ActionsAutoAddProductsUpdateResponseRejectedCodeEnum $code,
        public ?int $productId,
        public ?string $reason,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            code: OzonDtoValue::scalarObject($payload['code'] ?? null, ActionsV1ActionsAutoAddProductsUpdateResponseRejectedCodeEnum::class),
            productId: OzonDtoValue::int($payload['product_id'] ?? null),
            reason: OzonDtoValue::string($payload['reason'] ?? null),
            extra: OzonDtoValue::extra($payload, ['code', 'product_id', 'reason']),
        );
    }
}
