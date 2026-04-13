<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Returns;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V2ReturnsRfbsGetV2ResponseState implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $state,
        public ?string $stateName,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            state: OzonDtoValue::string($payload['state'] ?? null),
            stateName: OzonDtoValue::string($payload['state_name'] ?? null),
            extra: OzonDtoValue::extra($payload, ['state', 'state_name']),
        );
    }
}
