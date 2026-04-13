<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V2PostingFBSActListRelatedDocs implements OzonDtoInterface
{
    /**
     * @param array<array-key, mixed> $actOfAcceptance
     * @param array<array-key, mixed> $actOfMismatch
     * @param array<array-key, mixed> $actOfExcess
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $actOfAcceptance,
        public array $actOfMismatch,
        public array $actOfExcess,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            actOfAcceptance: OzonDtoValue::array($payload['act_of_acceptance'] ?? null),
            actOfMismatch: OzonDtoValue::array($payload['act_of_mismatch'] ?? null),
            actOfExcess: OzonDtoValue::array($payload['act_of_excess'] ?? null),
            extra: OzonDtoValue::extra($payload, ['act_of_acceptance', 'act_of_mismatch', 'act_of_excess']),
        );
    }
}
