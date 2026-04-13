<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetFinanceBalanceV1ResponseCashflows implements OzonDtoInterface
{
    /**
     * @param list<GetFinanceBalanceV1ResponseService> $services
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?GetFinanceBalanceV1ResponseReturns $returns,
        public ?GetFinanceBalanceV1ResponseSales $sales,
        public array $services,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            returns: OzonDtoValue::object($payload['returns'] ?? null, GetFinanceBalanceV1ResponseReturns::class),
            sales: OzonDtoValue::object($payload['sales'] ?? null, GetFinanceBalanceV1ResponseSales::class),
            services: OzonDtoValue::objectList($payload['services'] ?? null, GetFinanceBalanceV1ResponseService::class),
            extra: OzonDtoValue::extra($payload, ['returns', 'sales', 'services']),
        );
    }
}
