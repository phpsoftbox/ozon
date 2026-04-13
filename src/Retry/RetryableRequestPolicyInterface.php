<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\Retry;

use Psr\Http\Message\RequestInterface;

interface RetryableRequestPolicyInterface
{
    public function allows(RequestInterface $request): bool;
}
