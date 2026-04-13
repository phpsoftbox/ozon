<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Carriage;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1CarriageEttnStatusResponse implements OzonDtoInterface
{
    /**
     * @param list<string> $errors
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $errors,
        public ?string $status,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            errors: OzonDtoValue::array($payload['errors'] ?? null),
            status: OzonDtoValue::string($payload['status'] ?? null),
            extra: OzonDtoValue::extra($payload, ['errors', 'status']),
        );
    }
}
