<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Carriage;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class Carriagev1CarriageContainerRemovePostingsResponseErrorPostings implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $errorMessage,
        public ?string $postingNumber,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            errorMessage: OzonDtoValue::string($payload['error_message'] ?? null),
            postingNumber: OzonDtoValue::string($payload['posting_number'] ?? null),
            extra: OzonDtoValue::extra($payload, ['error_message', 'posting_number']),
        );
    }
}
