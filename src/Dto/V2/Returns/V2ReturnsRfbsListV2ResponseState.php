<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Returns;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V2ReturnsRfbsListV2ResponseState implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $groupState,
        public ?string $moneyReturnStateName,
        public ?string $state,
        public ?string $stateName,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            groupState: OzonDtoValue::string($payload['group_state'] ?? null),
            moneyReturnStateName: OzonDtoValue::string($payload['money_return_state_name'] ?? null),
            state: OzonDtoValue::string($payload['state'] ?? null),
            stateName: OzonDtoValue::string($payload['state_name'] ?? null),
            extra: OzonDtoValue::extra($payload, ['group_state', 'money_return_state_name', 'state', 'state_name']),
        );
    }
}
