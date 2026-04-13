<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ProductV1ProductVisibilitySetResponseItems implements OzonDtoInterface
{
    /**
     * @param list<ProductV1ProductVisibilitySetResponseItemsSellerItemPlacementListEnum> $sellerItemPlacementList
     * @param list<ProductV1ProductVisibilitySetResponseItemsShowcasesVisibilityListEnum> $showcasesVisibilityList
     * @param list<string> $warnings
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?ProductV1ProductVisibilitySetResponseItemsSelectPermissionEnum $selectPermission,
        public ?ProductV1ProductVisibilitySetResponseItemsSellerItemPlacementEnum $sellerItemPlacement,
        public array $sellerItemPlacementList,
        public ?ProductV1ProductVisibilitySetResponseItemsShowcasesVisibilityEnum $showcasesVisibility,
        public array $showcasesVisibilityList,
        public ?int $sku,
        public array $warnings,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            selectPermission: OzonDtoValue::object($payload['select_permission'] ?? null, ProductV1ProductVisibilitySetResponseItemsSelectPermissionEnum::class),
            sellerItemPlacement: OzonDtoValue::object($payload['seller_item_placement'] ?? null, ProductV1ProductVisibilitySetResponseItemsSellerItemPlacementEnum::class),
            sellerItemPlacementList: OzonDtoValue::objectList($payload['seller_item_placement_list'] ?? null, ProductV1ProductVisibilitySetResponseItemsSellerItemPlacementListEnum::class),
            showcasesVisibility: OzonDtoValue::object($payload['showcases_visibility'] ?? null, ProductV1ProductVisibilitySetResponseItemsShowcasesVisibilityEnum::class),
            showcasesVisibilityList: OzonDtoValue::objectList($payload['showcases_visibility_list'] ?? null, ProductV1ProductVisibilitySetResponseItemsShowcasesVisibilityListEnum::class),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            warnings: OzonDtoValue::array($payload['warnings'] ?? null),
            extra: OzonDtoValue::extra($payload, ['select_permission', 'seller_item_placement', 'seller_item_placement_list', 'showcases_visibility', 'showcases_visibility_list', 'sku', 'warnings']),
        );
    }
}
