<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\FbpDraft;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1FbpDraftDropOffRegistrateResponseRegistrationErrorBundleError implements OzonDtoInterface
{
    /**
     * @param list<V1BundleItemErrorEnum> $errors
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $errors,
        public ?int $sku,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            errors: OzonDtoValue::objectList($payload['errors'] ?? null, V1BundleItemErrorEnum::class),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            extra: OzonDtoValue::extra($payload, ['errors', 'sku']),
        );
    }
}
