<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Actions;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ActionsV1ActionsProductsUpdateResponse implements OzonDtoInterface
{
    /**
     * @param list<string> $activeProductIds
     * @param list<string> $deactivatedProductIds
     * @param list<ActionsV1ActionsProductsUpdateResponseRejected> $rejected
     * @param list<ActionsV1ActionsProductsUpdateResponseWarning> $warnings
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $activeProductIds,
        public array $deactivatedProductIds,
        public array $rejected,
        public array $warnings,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            activeProductIds: OzonDtoValue::array($payload['active_product_ids'] ?? null),
            deactivatedProductIds: OzonDtoValue::array($payload['deactivated_product_ids'] ?? null),
            rejected: OzonDtoValue::objectList($payload['rejected'] ?? null, ActionsV1ActionsProductsUpdateResponseRejected::class),
            warnings: OzonDtoValue::objectList($payload['warnings'] ?? null, ActionsV1ActionsProductsUpdateResponseWarning::class),
            extra: OzonDtoValue::extra($payload, ['active_product_ids', 'deactivated_product_ids', 'rejected', 'warnings']),
        );
    }
}
