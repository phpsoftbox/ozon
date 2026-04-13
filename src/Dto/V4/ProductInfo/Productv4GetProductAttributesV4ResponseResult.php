<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V4\ProductInfo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class Productv4GetProductAttributesV4ResponseResult implements OzonDtoInterface
{
    /**
     * @param list<ProductGetProductAttributesV4ResponseAttribute> $attributes
     * @param list<int> $attributesWithDefaults
     * @param array<array-key, mixed> $barcodes
     * @param list<GetProductAttributesV4ResponseAttribute> $complexAttributes
     * @param array<array-key, mixed> $images
     * @param list<V4GetProductAttributesResponsePdf> $pdfList
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $attributes,
        public array $attributesWithDefaults,
        public ?string $barcode,
        public array $barcodes,
        public ?int $descriptionCategoryId,
        public ?string $colorImage,
        public array $complexAttributes,
        public ?int $depth,
        public ?string $dimensionUnit,
        public ?int $height,
        public ?int $id,
        public array $images,
        public ?V4GetProductAttributesResponseModelInfo $modelInfo,
        public ?string $name,
        public ?string $offerId,
        public array $pdfList,
        public ?string $primaryImage,
        public ?string $sku,
        public ?int $typeId,
        public ?int $weight,
        public ?string $weightUnit,
        public ?int $width,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            attributes: OzonDtoValue::objectList($payload['attributes'] ?? null, ProductGetProductAttributesV4ResponseAttribute::class),
            attributesWithDefaults: OzonDtoValue::array($payload['attributes_with_defaults'] ?? null),
            barcode: OzonDtoValue::string($payload['barcode'] ?? null),
            barcodes: OzonDtoValue::array($payload['barcodes'] ?? null),
            descriptionCategoryId: OzonDtoValue::int($payload['description_category_id'] ?? null),
            colorImage: OzonDtoValue::string($payload['color_image'] ?? null),
            complexAttributes: OzonDtoValue::objectList($payload['complex_attributes'] ?? null, GetProductAttributesV4ResponseAttribute::class),
            depth: OzonDtoValue::int($payload['depth'] ?? null),
            dimensionUnit: OzonDtoValue::string($payload['dimension_unit'] ?? null),
            height: OzonDtoValue::int($payload['height'] ?? null),
            id: OzonDtoValue::int($payload['id'] ?? null),
            images: OzonDtoValue::array($payload['images'] ?? null),
            modelInfo: OzonDtoValue::object($payload['model_info'] ?? null, V4GetProductAttributesResponseModelInfo::class),
            name: OzonDtoValue::string($payload['name'] ?? null),
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            pdfList: OzonDtoValue::objectList($payload['pdf_list'] ?? null, V4GetProductAttributesResponsePdf::class),
            primaryImage: OzonDtoValue::string($payload['primary_image'] ?? null),
            sku: OzonDtoValue::string($payload['sku'] ?? null),
            typeId: OzonDtoValue::int($payload['type_id'] ?? null),
            weight: OzonDtoValue::int($payload['weight'] ?? null),
            weightUnit: OzonDtoValue::string($payload['weight_unit'] ?? null),
            width: OzonDtoValue::int($payload['width'] ?? null),
            extra: OzonDtoValue::extra($payload, ['attributes', 'attributes_with_defaults', 'barcode', 'barcodes', 'description_category_id', 'color_image', 'complex_attributes', 'depth', 'dimension_unit', 'height', 'id', 'images', 'model_info', 'name', 'offer_id', 'pdf_list', 'primary_image', 'sku', 'type_id', 'weight', 'weight_unit', 'width']),
        );
    }
}
