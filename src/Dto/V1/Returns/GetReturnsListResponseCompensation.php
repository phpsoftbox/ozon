<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Returns;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetReturnsListResponseCompensation implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?GetReturnsListResponseCompensationStatus $status,
        public ?string $changeMoment,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            status: OzonDtoValue::object($payload['status'] ?? null, GetReturnsListResponseCompensationStatus::class),
            changeMoment: OzonDtoValue::string($payload['change_moment'] ?? null),
            extra: OzonDtoValue::extra($payload, ['status', 'change_moment']),
        );
    }
}
