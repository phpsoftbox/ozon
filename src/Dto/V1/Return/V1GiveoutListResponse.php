<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Return;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1GiveoutListResponse implements OzonDtoInterface
{
    /**
     * @param list<GiveoutListResponseGiveoutDetails> $giveouts
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $giveouts,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            giveouts: OzonDtoValue::objectList($payload['giveouts'] ?? null, GiveoutListResponseGiveoutDetails::class),
            extra: OzonDtoValue::extra($payload, ['giveouts']),
        );
    }
}
