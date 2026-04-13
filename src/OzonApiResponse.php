<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon;

use PhpSoftBox\Collection\Collection;
use PhpSoftBox\Ozon\Dto\OzonDtoHydrator;
use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use RuntimeException;

/**
 * @template TKey of array-key
 * @template TValue
 *
 * @extends Collection<TKey, TValue>
 */
final class OzonApiResponse extends Collection
{
    /**
     * @param array<TKey, TValue> $items
     * @param class-string<OzonDtoInterface>|null $defaultDtoClass
     */
    public function __construct(
        array $items = [],
        private readonly ?string $defaultDtoClass = null,
    ) {
        parent::__construct($items);
    }

    /**
     * @template T of OzonDtoInterface
     *
     * @param class-string<T>|null $dtoClass
     *
     * @return T
     */
    public function makeDto(?string $dtoClass = null): OzonDtoInterface
    {
        $dtoClass ??= $this->defaultDtoClass;
        if ($dtoClass === null) {
            throw new RuntimeException('Ozon DTO class is not specified for this response.');
        }

        return OzonDtoHydrator::make($dtoClass, $this->all());
    }
}
