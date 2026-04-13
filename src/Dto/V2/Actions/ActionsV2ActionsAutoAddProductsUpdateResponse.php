<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Actions;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ActionsV2ActionsAutoAddProductsUpdateResponse implements OzonDtoInterface
{
    /**
     * @param list<ActionsV2ActionsAutoAddProductsUpdateResponseBelowMinPrice> $belowMinPrice
     * @param list<string> $deactivatedIds
     * @param list<ActionsV2ActionsAutoAddProductsUpdateResponseExtremelyLowPrice> $extremelyLowPrice
     * @param list<ActionsV2ActionsAutoAddProductsUpdateResponseFailedPrice> $failedPrice
     * @param list<string> $productIds
     * @param list<ActionsV2ActionsAutoAddProductsUpdateResponseRejected> $rejected
     * @param list<ActionsV2ActionsAutoAddProductsUpdateResponseWarningInfo> $warnings
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $belowMinPrice,
        public array $deactivatedIds,
        public array $extremelyLowPrice,
        public array $failedPrice,
        public array $productIds,
        public array $rejected,
        public array $warnings,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            belowMinPrice: OzonDtoValue::objectList($payload['below_min_price'] ?? null, ActionsV2ActionsAutoAddProductsUpdateResponseBelowMinPrice::class),
            deactivatedIds: OzonDtoValue::array($payload['deactivated_ids'] ?? null),
            extremelyLowPrice: OzonDtoValue::objectList($payload['extremely_low_price'] ?? null, ActionsV2ActionsAutoAddProductsUpdateResponseExtremelyLowPrice::class),
            failedPrice: OzonDtoValue::objectList($payload['failed_price'] ?? null, ActionsV2ActionsAutoAddProductsUpdateResponseFailedPrice::class),
            productIds: OzonDtoValue::array($payload['product_ids'] ?? null),
            rejected: OzonDtoValue::objectList($payload['rejected'] ?? null, ActionsV2ActionsAutoAddProductsUpdateResponseRejected::class),
            warnings: OzonDtoValue::objectList($payload['warnings'] ?? null, ActionsV2ActionsAutoAddProductsUpdateResponseWarningInfo::class),
            extra: OzonDtoValue::extra($payload, ['below_min_price', 'deactivated_ids', 'extremely_low_price', 'failed_price', 'product_ids', 'rejected', 'warnings']),
        );
    }
}
