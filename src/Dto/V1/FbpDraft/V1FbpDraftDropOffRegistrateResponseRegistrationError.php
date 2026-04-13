<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\FbpDraft;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1FbpDraftDropOffRegistrateResponseRegistrationError implements OzonDtoInterface
{
    /**
     * @param list<V1FbpDraftDropOffRegistrateResponseRegistrationErrorBundleError> $bundleErrors
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $bundleErrors,
        public ?V1OrderErrorTypeEnum $orderError,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            bundleErrors: OzonDtoValue::objectList($payload['bundle_errors'] ?? null, V1FbpDraftDropOffRegistrateResponseRegistrationErrorBundleError::class),
            orderError: OzonDtoValue::object($payload['order_error'] ?? null, V1OrderErrorTypeEnum::class),
            extra: OzonDtoValue::extra($payload, ['bundle_errors', 'order_error']),
        );
    }
}
