<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Actions;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ActionsV1ActionsAutoAddProductsUpdateResponse implements OzonDtoInterface
{
    /**
     * @param list<ActionsV1ActionsAutoAddProductsUpdateResponseBelowMinPrice> $belowMinPrice
     * @param list<ActionsV1ActionsAutoAddProductsUpdateResponseExtremelyLowPrice> $extremelyLowPrice
     * @param list<ActionsV1ActionsAutoAddProductsUpdateResponseFailedPrice> $failedPrice
     * @param list<ActionsV1ActionsAutoAddProductsUpdateResponseRejected> $rejected
     * @param list<string> $updatedIds
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $belowMinPrice,
        public array $extremelyLowPrice,
        public array $failedPrice,
        public array $rejected,
        public array $updatedIds,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            belowMinPrice: OzonDtoValue::objectList($payload['below_min_price'] ?? null, ActionsV1ActionsAutoAddProductsUpdateResponseBelowMinPrice::class),
            extremelyLowPrice: OzonDtoValue::objectList($payload['extremely_low_price'] ?? null, ActionsV1ActionsAutoAddProductsUpdateResponseExtremelyLowPrice::class),
            failedPrice: OzonDtoValue::objectList($payload['failed_price'] ?? null, ActionsV1ActionsAutoAddProductsUpdateResponseFailedPrice::class),
            rejected: OzonDtoValue::objectList($payload['rejected'] ?? null, ActionsV1ActionsAutoAddProductsUpdateResponseRejected::class),
            updatedIds: OzonDtoValue::array($payload['updated_ids'] ?? null),
            extra: OzonDtoValue::extra($payload, ['below_min_price', 'extremely_low_price', 'failed_price', 'rejected', 'updated_ids']),
        );
    }
}
