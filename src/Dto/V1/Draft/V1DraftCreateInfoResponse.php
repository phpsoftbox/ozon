<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Draft;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1DraftCreateInfoResponse implements OzonDtoInterface
{
    /**
     * @param list<Draftv1Cluster> $clusters
     * @param list<V1CalculationError> $errors
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $clusters,
        public ?int $draftId,
        public array $errors,
        public ?V1CalculationStatus $status,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            clusters: OzonDtoValue::objectList($payload['clusters'] ?? null, Draftv1Cluster::class),
            draftId: OzonDtoValue::int($payload['draft_id'] ?? null),
            errors: OzonDtoValue::objectList($payload['errors'] ?? null, V1CalculationError::class),
            status: OzonDtoValue::object($payload['status'] ?? null, V1CalculationStatus::class),
            extra: OzonDtoValue::extra($payload, ['clusters', 'draft_id', 'errors', 'status']),
        );
    }
}
