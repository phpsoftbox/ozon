<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Draft;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class DraftCreateCommonResponseError implements OzonDtoInterface
{
    /**
     * @param list<ErrorErrorReasonEnum> $errorReasons
     * @param list<DraftCreateCommonResponseErrorItemsValidation> $itemsValidation
     * @param list<string> $macrolocalClusterIds
     * @param list<string> $skus
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?ErrorErrorMessageEnum $errorMessage,
        public array $errorReasons,
        public array $itemsValidation,
        public array $macrolocalClusterIds,
        public ?string $message,
        public array $skus,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            errorMessage: OzonDtoValue::object($payload['error_message'] ?? null, ErrorErrorMessageEnum::class),
            errorReasons: OzonDtoValue::objectList($payload['error_reasons'] ?? null, ErrorErrorReasonEnum::class),
            itemsValidation: OzonDtoValue::objectList($payload['items_validation'] ?? null, DraftCreateCommonResponseErrorItemsValidation::class),
            macrolocalClusterIds: OzonDtoValue::array($payload['macrolocal_cluster_ids'] ?? null),
            message: OzonDtoValue::string($payload['message'] ?? null),
            skus: OzonDtoValue::array($payload['skus'] ?? null),
            extra: OzonDtoValue::extra($payload, ['error_message', 'error_reasons', 'items_validation', 'macrolocal_cluster_ids', 'message', 'skus']),
        );
    }
}
