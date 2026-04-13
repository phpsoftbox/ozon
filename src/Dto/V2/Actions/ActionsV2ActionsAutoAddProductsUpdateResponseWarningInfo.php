<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Actions;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ActionsV2ActionsAutoAddProductsUpdateResponseWarningInfo implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $productId,
        public ?string $reason,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            productId: OzonDtoValue::int($payload['product_id'] ?? null),
            reason: OzonDtoValue::string($payload['reason'] ?? null),
            extra: OzonDtoValue::extra($payload, ['product_id', 'reason']),
        );
    }
}
