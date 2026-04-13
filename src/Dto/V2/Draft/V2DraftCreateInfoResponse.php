<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Draft;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V2DraftCreateInfoResponse implements OzonDtoInterface
{
    /**
     * @param list<DraftCreateInfoResponseCluster> $clusters
     * @param list<DraftCreateInfoResponseError> $errors
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $clusters,
        public array $errors,
        public ?V2DraftCreateInfoResponseStatusEnum $status,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            clusters: OzonDtoValue::objectList($payload['clusters'] ?? null, DraftCreateInfoResponseCluster::class),
            errors: OzonDtoValue::objectList($payload['errors'] ?? null, DraftCreateInfoResponseError::class),
            status: OzonDtoValue::object($payload['status'] ?? null, V2DraftCreateInfoResponseStatusEnum::class),
            extra: OzonDtoValue::extra($payload, ['clusters', 'errors', 'status']),
        );
    }
}
