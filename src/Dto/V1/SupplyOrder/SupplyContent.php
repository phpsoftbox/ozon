<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SupplyContent implements OzonDtoInterface
{
    /**
     * @param list<ContentCanNotEditSupplyContentReasonEnum> $canNotSetReasons
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $bundleId,
        public array $canNotSetReasons,
        public ?bool $canSet,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            bundleId: OzonDtoValue::string($payload['bundle_id'] ?? null),
            canNotSetReasons: OzonDtoValue::objectList($payload['can_not_set_reasons'] ?? null, ContentCanNotEditSupplyContentReasonEnum::class),
            canSet: OzonDtoValue::bool($payload['can_set'] ?? null),
            extra: OzonDtoValue::extra($payload, ['bundle_id', 'can_not_set_reasons', 'can_set']),
        );
    }
}
