<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SellerActions;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1SellerActionsListResponse implements OzonDtoInterface
{
    /**
     * @param list<SellerActionsListResponseAction> $actions
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $actions,
        public ?int $total,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            actions: OzonDtoValue::objectList($payload['actions'] ?? null, SellerActionsListResponseAction::class),
            total: OzonDtoValue::int($payload['total'] ?? null),
            extra: OzonDtoValue::extra($payload, ['actions', 'total']),
        );
    }
}
