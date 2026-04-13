<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\Tests;

use PhpSoftBox\Http\Message\Response;
use PhpSoftBox\Ozon\Tests\Support\CreatesOzonClient;
use PHPUnit\Framework\TestCase;

final class OzonEngagementApiTest extends TestCase
{
    use CreatesOzonClient;

    /**
     * @param callable(object): mixed $invoke
     *
     * @dataProvider engagementRoutesProvider
     */
    public function testEngagementRoutes(string $expectedPath, string $expectedMethod, callable $invoke): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"ok":true}}'));
        $invoke($client);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertSame($expectedMethod, $request->getMethod());
        self::assertStringContainsString($expectedPath, (string) $request->getUri());
    }

    /**
     * @return iterable<string, array{0: string, 1: string, 2: callable(object): mixed}>
     */
    public static function engagementRoutesProvider(): iterable
    {
        yield 'v1 notification check' => [
            '/v1/notification/check',
            'POST',
            static fn (object $client): mixed => $client->notificationV1()->check(['subscription_id' => 1]),
        ];
        yield 'v1 notification delete' => [
            '/v1/notification/delete',
            'POST',
            static fn (object $client): mixed => $client->notificationV1()->delete(['subscription_id' => 1]),
        ];
        yield 'v1 notification enable' => [
            '/v1/notification/enable',
            'POST',
            static fn (object $client): mixed => $client->notificationV1()->enable(['enabled' => true]),
        ];
        yield 'v1 notification list' => [
            '/v1/notification/list',
            'POST',
            static fn (object $client): mixed => $client->notificationV1()->list(['limit' => 10]),
        ];
        yield 'v1 notification push type list' => [
            '/v1/notification/push-type/list',
            'POST',
            static fn (object $client): mixed => $client->notificationV1()->pushTypeList(),
        ];
        yield 'v1 notification set' => [
            '/v1/notification/set',
            'POST',
            static fn (object $client): mixed => $client->notificationV1()->set(['items' => []]),
        ];
        yield 'v1 notification update' => [
            '/v1/notification/update',
            'POST',
            static fn (object $client): mixed => $client->notificationV1()->update(['items' => []]),
        ];

        yield 'v1 question answer create' => [
            '/v1/question/answer/create',
            'POST',
            static fn (object $client): mixed => $client->questionV1()->answerCreate(['question_id' => 1]),
        ];
        yield 'v1 question answer delete' => [
            '/v1/question/answer/delete',
            'POST',
            static fn (object $client): mixed => $client->questionV1()->answerDelete(['question_id' => 1]),
        ];
        yield 'v1 question answer list' => [
            '/v1/question/answer/list',
            'POST',
            static fn (object $client): mixed => $client->questionV1()->answerList(['question_id' => 1]),
        ];
        yield 'v1 question change status' => [
            '/v1/question/change-status',
            'POST',
            static fn (object $client): mixed => $client->questionV1()->changeStatus(['question_id' => 1]),
        ];
        yield 'v1 question count' => [
            '/v1/question/count',
            'POST',
            static fn (object $client): mixed => $client->questionV1()->count(),
        ];
        yield 'v1 question info' => [
            '/v1/question/info',
            'POST',
            static fn (object $client): mixed => $client->questionV1()->info(['question_id' => 1]),
        ];
        yield 'v1 question list' => [
            '/v1/question/list',
            'POST',
            static fn (object $client): mixed => $client->questionV1()->list(['limit' => 10]),
        ];
        yield 'v1 question top sku' => [
            '/v1/question/top-sku',
            'POST',
            static fn (object $client): mixed => $client->questionV1()->topSku(['date_from' => '2026-01-01']),
        ];

        yield 'v1 review change status' => [
            '/v1/review/change-status',
            'POST',
            static fn (object $client): mixed => $client->reviewV1()->changeStatus(['review_id' => 1]),
        ];
        yield 'v1 review comment create' => [
            '/v1/review/comment/create',
            'POST',
            static fn (object $client): mixed => $client->reviewV1()->commentCreate(['review_id' => 1]),
        ];
        yield 'v1 review comment delete' => [
            '/v1/review/comment/delete',
            'POST',
            static fn (object $client): mixed => $client->reviewV1()->commentDelete(['review_id' => 1]),
        ];
        yield 'v1 review comment list' => [
            '/v1/review/comment/list',
            'POST',
            static fn (object $client): mixed => $client->reviewV1()->commentList(['review_id' => 1]),
        ];
        yield 'v1 review count' => [
            '/v1/review/count',
            'POST',
            static fn (object $client): mixed => $client->reviewV1()->count(),
        ];
        yield 'v1 review info' => [
            '/v1/review/info',
            'POST',
            static fn (object $client): mixed => $client->reviewV1()->info(['review_id' => 1]),
        ];
        yield 'v1 review list' => [
            '/v1/review/list',
            'POST',
            static fn (object $client): mixed => $client->reviewV1()->list(['limit' => 10]),
        ];

        yield 'v1 receipts get' => [
            '/v1/receipts/get',
            'POST',
            static fn (object $client): mixed => $client->receiptsV1()->get(['id' => 1]),
        ];
        yield 'v1 receipts seller list' => [
            '/v1/receipts/seller/list',
            'POST',
            static fn (object $client): mixed => $client->receiptsV1()->sellerList(['limit' => 10]),
        ];
        yield 'v1 receipts upload' => [
            '/v1/receipts/upload',
            'POST',
            static fn (object $client): mixed => $client->receiptsV1()->upload(['file' => 'base64']),
        ];

        yield 'v1 search queries text' => [
            '/v1/search-queries/text',
            'POST',
            static fn (object $client): mixed => $client->searchQueriesV1()->text(['date_from' => '2026-01-01']),
        ];
        yield 'v1 search queries top' => [
            '/v1/search-queries/top',
            'POST',
            static fn (object $client): mixed => $client->searchQueriesV1()->top(['date_from' => '2026-01-01']),
        ];

        yield 'v1 seller info' => [
            '/v1/seller/info',
            'POST',
            static fn (object $client): mixed => $client->sellerV1()->info(),
        ];
        yield 'v1 seller ozon logistics info' => [
            '/v1/seller/ozon-logistics/info',
            'POST',
            static fn (object $client): mixed => $client->sellerV1()->ozonLogisticsInfo(),
        ];

        yield 'v1 roles' => [
            '/v1/roles',
            'POST',
            static fn (object $client): mixed => $client->rolesV1()->list(),
        ];
    }
}
