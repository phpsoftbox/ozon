<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V2FboSinglePostingLegalInfo implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $companyName,
        public ?string $inn,
        public ?string $kpp,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            companyName: OzonDtoValue::string($payload['company_name'] ?? null),
            inn: OzonDtoValue::string($payload['inn'] ?? null),
            kpp: OzonDtoValue::string($payload['kpp'] ?? null),
            extra: OzonDtoValue::extra($payload, ['company_name', 'inn', 'kpp']),
        );
    }
}
