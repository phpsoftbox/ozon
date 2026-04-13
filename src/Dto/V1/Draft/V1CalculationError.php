<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Draft;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1CalculationError implements OzonDtoInterface
{
    /**
     * @param list<V1ItemsValidation> $itemsValidation
     * @param list<string> $unknownClusterIds
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $errorMessage,
        public array $itemsValidation,
        public array $unknownClusterIds,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            errorMessage: OzonDtoValue::string($payload['error_message'] ?? null),
            itemsValidation: OzonDtoValue::objectList($payload['items_validation'] ?? null, V1ItemsValidation::class),
            unknownClusterIds: OzonDtoValue::array($payload['unknown_cluster_ids'] ?? null),
            extra: OzonDtoValue::extra($payload, ['error_message', 'items_validation', 'unknown_cluster_ids']),
        );
    }
}
