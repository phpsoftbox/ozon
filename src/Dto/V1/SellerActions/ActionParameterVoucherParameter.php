<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SellerActions;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ActionParameterVoucherParameter implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $countCodes,
        public ?bool $isPrivate,
        public ?ActionParameterVoucherParameterTypeEnum $type,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            countCodes: OzonDtoValue::int($payload['count_codes'] ?? null),
            isPrivate: OzonDtoValue::bool($payload['is_private'] ?? null),
            type: OzonDtoValue::object($payload['type'] ?? null, ActionParameterVoucherParameterTypeEnum::class),
            extra: OzonDtoValue::extra($payload, ['count_codes', 'is_private', 'type']),
        );
    }
}
