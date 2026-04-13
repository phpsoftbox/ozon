<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Carriage;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1CarriageCourierContactGetResponseContact implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $carriageId,
        public ?string $phone,
        public ?string $wechatNickname,
        public ?string $comment,
        public ?string $updatedAt,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            carriageId: OzonDtoValue::int($payload['carriage_id'] ?? null),
            phone: OzonDtoValue::string($payload['phone'] ?? null),
            wechatNickname: OzonDtoValue::string($payload['wechat_nickname'] ?? null),
            comment: OzonDtoValue::string($payload['comment'] ?? null),
            updatedAt: OzonDtoValue::string($payload['updated_at'] ?? null),
            extra: OzonDtoValue::extra($payload, ['carriage_id', 'phone', 'wechat_nickname', 'comment', 'updated_at']),
        );
    }
}
