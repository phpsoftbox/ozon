<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\Tests;

use InvalidArgumentException;
use PhpSoftBox\Http\Message\Response;
use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonException;
use PhpSoftBox\Ozon\Retry\RateLimitRetryOptions;
use PhpSoftBox\Ozon\Tests\Support\CreatesOzonClient;
use PhpSoftBox\Ozon\Tests\Support\RecordingSleeper;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\CoversMethod;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(OzonApiClient::class)]
#[CoversClass(RateLimitRetryOptions::class)]
#[CoversMethod(OzonApiClient::class, 'request')]
#[CoversMethod(RateLimitRetryOptions::class, '__construct')]
final class OzonApiClientRetryDelayBudgetTest extends TestCase
{
    use CreatesOzonClient;

    /**
     * Проверим, что задержка из заголовка больше maxDelaySeconds не выполняется: клиент сразу
     * возвращает ошибку 429 вместо многоминутного сна воркера.
     *
     * @see OzonApiClient::request()
     */
    #[Test]
    public function longProviderDelayIsNotAwaited(): void
    {
        $sleeper = new RecordingSleeper();

        [$client, $httpClient] = $this->createClient(
            [
                new Response(429, ['Item-Retry-After' => '10'], '{"message":"cooldown"}'),
                new Response(200, [], '{"result":{}}'),
            ],
            rateLimitRetry: new RateLimitRetryOptions(sleeper: $sleeper),
        );

        try {
            $client->post('/v3/product/import');
            self::fail('Rate limit response must throw OzonException.');
        } catch (OzonException $exception) {
            // Исключение несёт статус и сообщение последнего ответа.
            self::assertSame(429, $exception->statusCode());
            self::assertSame('cooldown', $exception->getMessage());
        }

        // Повтора и ожидания не было.
        self::assertCount(1, $httpClient->requests());
        self::assertSame([], $sleeper->delays());
    }

    /**
     * Проверим, что сумма задержек одного вызова ограничена maxTotalDelaySeconds.
     *
     * @see OzonApiClient::request()
     */
    #[Test]
    public function totalDelayBudgetStopsRetries(): void
    {
        $sleeper = new RecordingSleeper();

        [$client, $httpClient] = $this->createClient(
            [
                new Response(429, ['Retry-After' => '20'], '{"message":"first"}'),
                new Response(429, ['Retry-After' => '20'], '{"message":"second"}'),
                new Response(200, [], '{"result":{}}'),
            ],
            rateLimitRetry: new RateLimitRetryOptions(sleeper: $sleeper, maxTotalDelaySeconds: 30.0),
        );

        try {
            $client->post('/v3/product/import');
            self::fail('Exhausted delay budget must throw OzonException.');
        } catch (OzonException $exception) {
            self::assertSame('second', $exception->getMessage());
        }

        // Первая пауза 20 с уложилась в бюджет, вторая (20 + 20 > 30) — нет.
        self::assertCount(2, $httpClient->requests());
        self::assertSame([20.0], $sleeper->delays());
    }

    /**
     * Проверим, что null отключает ограничение: длительная задержка сервера выполняется.
     *
     * @see OzonApiClient::request()
     */
    #[Test]
    public function nullBudgetsAllowLongDelay(): void
    {
        $sleeper = new RecordingSleeper();

        [$client] = $this->createClient(
            [
                new Response(429, ['Item-Retry-After' => '10'], '{"message":"cooldown"}'),
                new Response(200, [], '{"result":{}}'),
            ],
            rateLimitRetry: new RateLimitRetryOptions(
                sleeper: $sleeper,
                maxDelaySeconds: null,
                maxTotalDelaySeconds: null,
            ),
        );

        $client->post('/v3/product/import');

        self::assertSame([600.0], $sleeper->delays());
    }

    /**
     * Проверим, что отрицательный бюджет задержки отклоняется при создании опций.
     *
     * @see RateLimitRetryOptions::__construct()
     */
    #[Test]
    public function negativeDelayBudgetIsRejected(): void
    {
        $this->expectException(InvalidArgumentException::class);

        new RateLimitRetryOptions(maxDelaySeconds: -1.0);
    }
}
