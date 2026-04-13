<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\CargoesLabel;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1CargoesLabelCreateErrors implements OzonDtoInterface
{
    /**
     * @param list<V1CargoesLabelCreateErrorsErrorReason> $errorReasons
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $errorReasons,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            errorReasons: OzonDtoValue::objectList($payload['error_reasons'] ?? null, V1CargoesLabelCreateErrorsErrorReason::class),
            extra: OzonDtoValue::extra($payload, ['error_reasons']),
        );
    }
}
