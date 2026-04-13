<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Posting;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PostingV2PostingDigitalListResponsePostingsExternalOrder implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $isExternal,
        public ?string $platformName,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            isExternal: OzonDtoValue::bool($payload['is_external'] ?? null),
            platformName: OzonDtoValue::string($payload['platform_name'] ?? null),
            extra: OzonDtoValue::extra($payload, ['is_external', 'platform_name']),
        );
    }
}
