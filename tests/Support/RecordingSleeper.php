<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\Tests\Support;

use PhpSoftBox\Ozon\Retry\SleeperInterface;

final class RecordingSleeper implements SleeperInterface
{
    /** @var list<float> */
    private array $delays = [];

    public function sleep(float $seconds): void
    {
        $this->delays[] = $seconds;
    }

    /** @return list<float> */
    public function delays(): array
    {
        return $this->delays;
    }
}
