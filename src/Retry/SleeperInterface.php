<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\Retry;

interface SleeperInterface
{
    public function sleep(float $seconds): void;
}
