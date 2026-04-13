<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Carriage;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class Carriagev1CarriageContainerGetResponsePostings implements OzonDtoInterface
{
    /**
     * @param list<string> $availableActions
     * @param list<Carriagev1CarriageContainerGetResponsePostingsProducts> $products
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $availableActions,
        public ?string $inProcessAt,
        public ?string $postingNumber,
        public array $products,
        public ?string $sortType,
        public ?float $weight,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            availableActions: OzonDtoValue::array($payload['available_actions'] ?? null),
            inProcessAt: OzonDtoValue::string($payload['in_process_at'] ?? null),
            postingNumber: OzonDtoValue::string($payload['posting_number'] ?? null),
            products: OzonDtoValue::objectList($payload['products'] ?? null, Carriagev1CarriageContainerGetResponsePostingsProducts::class),
            sortType: OzonDtoValue::string($payload['sort_type'] ?? null),
            weight: OzonDtoValue::float($payload['weight'] ?? null),
            extra: OzonDtoValue::extra($payload, ['available_actions', 'in_process_at', 'posting_number', 'products', 'sort_type', 'weight']),
        );
    }
}
