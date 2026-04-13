<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\ConditionalCancellation;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V2GetConditionalCancellationListV2Response implements OzonDtoInterface
{
    /**
     * @param list<GetConditionalCancellationListV2ResponseResult> $result
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $counter,
        public ?int $lastId,
        public array $result,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            counter: OzonDtoValue::int($payload['counter'] ?? null),
            lastId: OzonDtoValue::int($payload['last_id'] ?? null),
            result: OzonDtoValue::objectList($payload['result'] ?? null, GetConditionalCancellationListV2ResponseResult::class),
            extra: OzonDtoValue::extra($payload, ['counter', 'last_id', 'result']),
        );
    }
}
