<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1SupplyOrderContentUpdateStatusResponse implements OzonDtoInterface
{
    /**
     * @param list<V1SupplyOrderContentUpdateStatusResponseErrorEnum> $errors
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?SupplyOrderV1SupplyOrderContentUpdateStatusResponseErrorDetails $errorDetails,
        public array $errors,
        public ?string $newBundleId,
        public ?SupplyOrderContentUpdateStatusResponseStatusEnum $status,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            errorDetails: OzonDtoValue::object($payload['error_details'] ?? null, SupplyOrderV1SupplyOrderContentUpdateStatusResponseErrorDetails::class),
            errors: OzonDtoValue::scalarObjectList($payload['errors'] ?? null, V1SupplyOrderContentUpdateStatusResponseErrorEnum::class),
            newBundleId: OzonDtoValue::string($payload['new_bundle_id'] ?? null),
            status: OzonDtoValue::scalarObject($payload['status'] ?? null, SupplyOrderContentUpdateStatusResponseStatusEnum::class),
            extra: OzonDtoValue::extra($payload, ['error_details', 'errors', 'new_bundle_id', 'status']),
        );
    }
}
