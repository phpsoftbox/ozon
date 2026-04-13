<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\Tests;

use PhpSoftBox\Http\Message\Response;
use PhpSoftBox\Ozon\OzonException;
use PhpSoftBox\Ozon\Retry\CallbackRetryableRequestPolicy;
use PhpSoftBox\Ozon\Retry\OzonRetryEvent;
use PhpSoftBox\Ozon\Retry\RateLimitRetryOptions;
use PhpSoftBox\Ozon\Tests\Support\CreatesOzonClient;
use PhpSoftBox\Ozon\Tests\Support\RecordingSleeper;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

final class OzonApiClientRateLimitRetryTest extends TestCase
{
    use CreatesOzonClient;

    public function testRetries429UsingRetryAfterHeader(): void
    {
        $sleeper = new RecordingSleeper();

        [$client, $httpClient] = $this->createClient(
            [
                new Response(429, ['Retry-After' => '2'], '{"message":"retry"}'),
                new Response(200, [], '{"result":{"items":[]}}'),
            ],
            rateLimitRetry: new RateLimitRetryOptions(sleeper: $sleeper),
        );

        $client->post('/v3/product/info/list', ['offer_id' => ['SKU-1']]);

        self::assertCount(2, $httpClient->requests());
        self::assertSame([2.0], $sleeper->delays());
    }

    public function testUnderstandsItemRetryAfterInMinutes(): void
    {
        $sleeper = new RecordingSleeper();

        [$client] = $this->createClient(
            [
                new Response(429, ['Item-Retry-After' => '0.05'], '{"message":"retry"}'),
                new Response(200, [], '{"result":{}}'),
            ],
            rateLimitRetry: new RateLimitRetryOptions(sleeper: $sleeper),
        );

        $client->post('/v3/product/import', ['items' => []]);

        self::assertSame([3.0], $sleeper->delays());
    }

    public function testUsesFallbackBackoffAndThrowsLast429(): void
    {
        $sleeper = new RecordingSleeper();

        [$client, $httpClient] = $this->createClient(
            [
                new Response(429, [], '{"message":"first"}'),
                new Response(429, ['Retry-After' => 'invalid'], '{"message":"second"}'),
                new Response(429, [], '{"message":"third"}'),
                new Response(429, [], '{"message":"last","request_id":"final"}'),
            ],
            rateLimitRetry: new RateLimitRetryOptions(sleeper: $sleeper),
        );

        try {
            $client->post('/v3/product/info/list');
            self::fail('The final 429 response must throw OzonException.');
        } catch (OzonException $exception) {
            self::assertSame(429, $exception->statusCode());
            self::assertSame('last', $exception->getMessage());
            self::assertSame('final', $exception->payload()['request_id'] ?? null);
        }

        self::assertCount(4, $httpClient->requests());
        self::assertSame([1.0, 2.0, 4.0], $sleeper->delays());
    }

    public function testRetriesMutatingRequestAndReplaysConsumedBody(): void
    {
        $sleeper = new RecordingSleeper();

        [$client, $httpClient] = $this->createClient(
            [
                new Response(429, [], '{"message":"retry"}'),
                new Response(200, [], '{"result":{}}'),
            ],
            rateLimitRetry: new RateLimitRetryOptions(sleeper: $sleeper),
            consumeRequestBodies: true,
        );

        $client->put('/v1/product/import/prices', ['prices' => [['offer_id' => 'SKU-1']]]);

        self::assertSame(
            [
                '{"prices":[{"offer_id":"SKU-1"}]}',
                '{"prices":[{"offer_id":"SKU-1"}]}',
            ],
            $httpClient->requestBodies(),
        );
        self::assertSame([1.0], $sleeper->delays());
    }

    public function testCustomPolicyCanExcludeRequest(): void
    {
        $sleeper = new RecordingSleeper();

        [$client, $httpClient] = $this->createClient(
            [
                new Response(429, [], '{"message":"not retried"}'),
                new Response(200, [], '{"result":{}}'),
            ],
            rateLimitRetry: new RateLimitRetryOptions(
                requestPolicy: new CallbackRetryableRequestPolicy(
                    static fn (RequestInterface $request): bool => $request->getUri()->getPath() !== '/v1/product/import/prices',
                ),
                sleeper: $sleeper,
            ),
        );

        try {
            $client->put('/v1/product/import/prices', ['prices' => []]);
            self::fail('The custom policy must disable retry.');
        } catch (OzonException $exception) {
            self::assertSame(429, $exception->statusCode());
        }

        self::assertCount(1, $httpClient->requests());
        self::assertSame([], $sleeper->delays());
    }

    public function testRetryCallbackReceivesContext(): void
    {
        $sleeper  = new RecordingSleeper();
        $events   = [];
        [$client] = $this->createClient(
            [
                new Response(429, ['Retry-After' => '3'], '{"message":"retry"}'),
                new Response(200, [], '{"result":{}}'),
            ],
            rateLimitRetry: new RateLimitRetryOptions(
                sleeper: $sleeper,
                onRetry: static function (OzonRetryEvent $event) use (&$events): void {
                    $events[] = $event;
                },
            ),
        );

        $client->get('/v1/seller/info');

        self::assertCount(1, $events);
        self::assertSame(2, $events[0]->attempt);
        self::assertSame(3.0, $events[0]->delaySeconds);
        self::assertSame('GET', $events[0]->method);
        self::assertSame('/v1/seller/info', $events[0]->endpoint);
        self::assertSame(429, $events[0]->statusCode);
    }

    public function testDoesNotRetryOtherStatuses(): void
    {
        $sleeper = new RecordingSleeper();

        [$client, $httpClient] = $this->createClient(
            [
                new Response(500, [], '{"message":"failed"}'),
                new Response(200, [], '{"result":{}}'),
            ],
            rateLimitRetry: new RateLimitRetryOptions(sleeper: $sleeper),
        );

        try {
            $client->get('/v1/seller/info');
            self::fail('A non-429 response must retain existing behavior.');
        } catch (OzonException $exception) {
            self::assertSame(500, $exception->statusCode());
        }

        self::assertCount(1, $httpClient->requests());
        self::assertSame([], $sleeper->delays());
    }
}
