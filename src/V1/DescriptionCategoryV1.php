<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V1;

use InvalidArgumentException;
use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class DescriptionCategoryV1
{
    public function __construct(
        private readonly OzonApiClient $client,
    ) {
    }

    /**
     * Возвращает дерево категорий Ozon.
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function tree(?int $categoryId = null, string $language = 'DEFAULT'): OzonApiResponse
    {
        $payload = [
            'language' => $language,
        ];

        if ($categoryId !== null) {
            $payload['category_id'] = $categoryId;
        }

        return $this->client->v1('description-category')->post('/tree', $payload);
    }

    /**
     * Возвращает характеристики для категории и типа товара.
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function attributes(int $descriptionCategoryId, int $typeId, string $language = 'DEFAULT'): OzonApiResponse
    {
        if ($descriptionCategoryId <= 0) {
            throw new InvalidArgumentException('description_category_id must be greater than zero.');
        }

        if ($typeId <= 0) {
            throw new InvalidArgumentException('type_id must be greater than zero.');
        }

        return $this->client->v1('description-category')->post('/attribute', [
            'description_category_id' => $descriptionCategoryId,
            'type_id'                 => $typeId,
            'language'                => $language,
        ]);
    }

    /**
     * Возвращает справочник значений характеристики.
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function attributeValues(
        int $attributeId,
        int $descriptionCategoryId,
        int $typeId,
        int $limit = 100,
        ?int $lastValueId = null,
        string $language = 'DEFAULT',
    ): OzonApiResponse {
        if ($attributeId <= 0) {
            throw new InvalidArgumentException('attribute_id must be greater than zero.');
        }

        if ($descriptionCategoryId <= 0) {
            throw new InvalidArgumentException('description_category_id must be greater than zero.');
        }

        if ($typeId <= 0) {
            throw new InvalidArgumentException('type_id must be greater than zero.');
        }

        if ($limit <= 0) {
            throw new InvalidArgumentException('limit must be greater than zero.');
        }

        $payload = [
            'attribute_id'            => $attributeId,
            'description_category_id' => $descriptionCategoryId,
            'type_id'                 => $typeId,
            'limit'                   => $limit,
            'language'                => $language,
        ];

        if ($lastValueId !== null) {
            $payload['last_value_id'] = $lastValueId;
        }

        return $this->client->v1('description-category/attribute')->post('/values', $payload);
    }

    /**
     * Ищет значения в справочнике характеристики.
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function searchAttributeValues(
        int $attributeId,
        int $descriptionCategoryId,
        int $typeId,
        string $value,
        int $limit = 20,
    ): OzonApiResponse {
        if ($attributeId <= 0) {
            throw new InvalidArgumentException('attribute_id must be greater than zero.');
        }

        if ($descriptionCategoryId <= 0) {
            throw new InvalidArgumentException('description_category_id must be greater than zero.');
        }

        if ($typeId <= 0) {
            throw new InvalidArgumentException('type_id must be greater than zero.');
        }

        if ($limit <= 0) {
            throw new InvalidArgumentException('limit must be greater than zero.');
        }

        if ($value === '') {
            throw new InvalidArgumentException('value must not be empty.');
        }

        return $this->client->v1('description-category/attribute/values')->post('/search', [
            'attribute_id'            => $attributeId,
            'description_category_id' => $descriptionCategoryId,
            'type_id'                 => $typeId,
            'value'                   => $value,
            'limit'                   => $limit,
        ]);
    }
}
