<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\Retry;

use Psr\Http\Message\RequestInterface;

final readonly class DefaultRetryableRequestPolicy implements RetryableRequestPolicyInterface
{
    public function allows(RequestInterface $request): bool
    {
        return true;
    }
}
