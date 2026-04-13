<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\Tests;

use PhpSoftBox\Http\Message\Response;
use PhpSoftBox\Ozon\Tests\Support\CreatesOzonClient;
use PHPUnit\Framework\TestCase;

final class OzonOperationsApiTest extends TestCase
{
    use CreatesOzonClient;

    /**
     * @param callable(object): mixed $invoke
     *
     * @dataProvider operationsRoutesProvider
     */
    public function testOperationsRoutes(string $expectedPath, string $expectedMethod, callable $invoke): void
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
    public static function operationsRoutesProvider(): iterable
    {
        yield 'v1 cancel reason list' => [
            '/v1/cancel-reason/list',
            'POST',
            static fn (object $client): mixed => $client->cancelReasonV1()->list(),
        ];
        yield 'v1 cancel reason list by order' => [
            '/v1/cancel-reason/list-by-order',
            'POST',
            static fn (object $client): mixed => $client->cancelReasonV1()->listByOrder(['order_id' => 1]),
        ];
        yield 'v1 cancel reason list by posting' => [
            '/v1/cancel-reason/list-by-posting',
            'POST',
            static fn (object $client): mixed => $client->cancelReasonV1()->listByPosting(['posting_number' => 'p1']),
        ];
        yield 'v1 order cancel' => [
            '/v1/order/cancel',
            'POST',
            static fn (object $client): mixed => $client->orderV1()->cancel(['order_id' => 1]),
        ];
        yield 'v1 order cancel check' => [
            '/v1/order/cancel/check',
            'POST',
            static fn (object $client): mixed => $client->orderV1()->cancelCheck(['order_id' => 1]),
        ];
        yield 'v1 order cancel status' => [
            '/v1/order/cancel/status',
            'POST',
            static fn (object $client): mixed => $client->orderV1()->cancelStatus(['order_id' => 1]),
        ];
        yield 'v1 posting cancel' => [
            '/v1/posting/cancel',
            'POST',
            static fn (object $client): mixed => $client->postingV1()->cancel(['posting_number' => 'p1']),
        ];
        yield 'v1 posting cancel status' => [
            '/v1/posting/cancel/status',
            'POST',
            static fn (object $client): mixed => $client->postingV1()->cancelStatus(['task_id' => 1]),
        ];
        yield 'v2 conditional cancellation list' => [
            '/v2/conditional-cancellation/list',
            'POST',
            static fn (object $client): mixed => $client->conditionalCancellationV2()->list(['limit' => 10]),
        ];
        yield 'v2 conditional cancellation approve' => [
            '/v2/conditional-cancellation/approve',
            'POST',
            static fn (object $client): mixed => $client->conditionalCancellationV2()->approve(['id' => 1]),
        ];
        yield 'v2 conditional cancellation reject' => [
            '/v2/conditional-cancellation/reject',
            'POST',
            static fn (object $client): mixed => $client->conditionalCancellationV2()->reject(['id' => 1]),
        ];

        yield 'v1 returns list' => [
            '/v1/returns/list',
            'POST',
            static fn (object $client): mixed => $client->returnsV1()->list(['limit' => 10]),
        ];
        yield 'v1 returns company fbs info' => [
            '/v1/returns/company/fbs/info',
            'POST',
            static fn (object $client): mixed => $client->returnsV1()->companyFbsInfo(['return_id' => 1]),
        ];
        yield 'v1 returns settings utilization history' => [
            '/v1/returns/settings/utilization/history',
            'POST',
            static fn (object $client): mixed => $client->returnsV1()->settingsUtilizationHistory(['limit' => 10]),
        ];
        yield 'v1 returns settings utilization info' => [
            '/v1/returns/settings/utilization/info',
            'POST',
            static fn (object $client): mixed => $client->returnsV1()->settingsUtilizationInfo(),
        ];
        yield 'v1 returns settings utilization update' => [
            '/v1/returns/settings/utilization/update',
            'POST',
            static fn (object $client): mixed => $client->returnsV1()->settingsUtilizationUpdate(['enabled' => true]),
        ];
        yield 'v1 returns rfbs action set' => [
            '/v1/returns/rfbs/action/set',
            'POST',
            static fn (object $client): mixed => $client->returnsV1()->rfbsActionSet(['return_id' => 1]),
        ];

        yield 'v2 returns rfbs list' => [
            '/v2/returns/rfbs/list',
            'POST',
            static fn (object $client): mixed => $client->returnsRfbsV2()->list(['limit' => 10]),
        ];
        yield 'v2 returns rfbs get' => [
            '/v2/returns/rfbs/get',
            'POST',
            static fn (object $client): mixed => $client->returnsRfbsV2()->get(['return_id' => 1]),
        ];
        yield 'v2 returns rfbs reject' => [
            '/v2/returns/rfbs/reject',
            'POST',
            static fn (object $client): mixed => $client->returnsRfbsV2()->reject(['return_id' => 1]),
        ];
        yield 'v2 returns rfbs compensate' => [
            '/v2/returns/rfbs/compensate',
            'POST',
            static fn (object $client): mixed => $client->returnsRfbsV2()->compensate(['return_id' => 1]),
        ];
        yield 'v2 returns rfbs verify' => [
            '/v2/returns/rfbs/verify',
            'POST',
            static fn (object $client): mixed => $client->returnsRfbsV2()->verify(['return_id' => 1]),
        ];
        yield 'v2 returns rfbs receive return' => [
            '/v2/returns/rfbs/receive-return',
            'POST',
            static fn (object $client): mixed => $client->returnsRfbsV2()->receiveReturn(['return_id' => 1]),
        ];
        yield 'v2 returns rfbs return money' => [
            '/v2/returns/rfbs/return-money',
            'POST',
            static fn (object $client): mixed => $client->returnsRfbsV2()->returnMoney(['return_id' => 1]),
        ];

        yield 'v1 return giveout is enabled' => [
            '/v1/return/giveout/is-enabled',
            'POST',
            static fn (object $client): mixed => $client->returnsV1()->giveoutIsEnabled(['return_id' => 1]),
        ];
        yield 'v1 return giveout list' => [
            '/v1/return/giveout/list',
            'POST',
            static fn (object $client): mixed => $client->returnsV1()->giveoutList(['limit' => 10]),
        ];
        yield 'v1 return giveout info' => [
            '/v1/return/giveout/info',
            'POST',
            static fn (object $client): mixed => $client->returnsV1()->giveoutInfo(['return_id' => 1]),
        ];
        yield 'v1 return giveout barcode' => [
            '/v1/return/giveout/barcode',
            'POST',
            static fn (object $client): mixed => $client->returnsV1()->giveoutBarcode(['return_id' => 1]),
        ];
        yield 'v1 return giveout get pdf' => [
            '/v1/return/giveout/get-pdf',
            'POST',
            static fn (object $client): mixed => $client->returnsV1()->giveoutGetPdf(['return_id' => 1]),
        ];
        yield 'v1 return giveout get png' => [
            '/v1/return/giveout/get-png',
            'POST',
            static fn (object $client): mixed => $client->returnsV1()->giveoutGetPng(['return_id' => 1]),
        ];
        yield 'v1 return giveout barcode reset' => [
            '/v1/return/giveout/barcode-reset',
            'POST',
            static fn (object $client): mixed => $client->returnsV1()->giveoutBarcodeReset(['return_id' => 1]),
        ];
        yield 'v1 return pass create' => [
            '/v1/return/pass/create',
            'POST',
            static fn (object $client): mixed => $client->returnsV1()->passCreate(['return_id' => 1]),
        ];
        yield 'v1 return pass update' => [
            '/v1/return/pass/update',
            'POST',
            static fn (object $client): mixed => $client->returnsV1()->passUpdate(['pass_id' => 1]),
        ];
        yield 'v1 return pass delete' => [
            '/v1/return/pass/delete',
            'POST',
            static fn (object $client): mixed => $client->returnsV1()->passDelete(['pass_id' => 1]),
        ];

        yield 'v1 chat send file' => [
            '/v1/chat/send/file',
            'POST',
            static fn (object $client): mixed => $client->chatV1()->sendFile(['chat_id' => 'c1']),
        ];
        yield 'v1 chat send message' => [
            '/v1/chat/send/message',
            'POST',
            static fn (object $client): mixed => $client->chatV1()->sendMessage(['chat_id' => 'c1']),
        ];
        yield 'v1 chat start' => [
            '/v1/chat/start',
            'POST',
            static fn (object $client): mixed => $client->chatV1()->start(['posting_number' => 'p1']),
        ];
        yield 'v2 chat list' => [
            '/v2/chat/list',
            'POST',
            static fn (object $client): mixed => $client->chatV2()->list(['limit' => 10]),
        ];
        yield 'v2 chat read' => [
            '/v2/chat/read',
            'POST',
            static fn (object $client): mixed => $client->chatV2()->read(['chat_id' => 'c1']),
        ];
        yield 'v3 chat list' => [
            '/v3/chat/list',
            'POST',
            static fn (object $client): mixed => $client->chatV3()->list(['limit' => 10]),
        ];
        yield 'v3 chat history' => [
            '/v3/chat/history',
            'POST',
            static fn (object $client): mixed => $client->chatV3()->history(['chat_id' => 'c1']),
        ];

        yield 'v1 invoice file upload' => [
            '/v1/invoice/file/upload',
            'POST',
            static fn (object $client): mixed => $client->invoiceV1()->fileUpload(['invoice_id' => 1]),
        ];
        yield 'v1 invoice delete' => [
            '/v1/invoice/delete',
            'POST',
            static fn (object $client): mixed => $client->invoiceV1()->delete(['invoice_id' => 1]),
        ];
        yield 'v2 invoice create or update' => [
            '/v2/invoice/create-or-update',
            'POST',
            static fn (object $client): mixed => $client->invoiceV2()->createOrUpdate(['invoice_id' => 1]),
        ];
        yield 'v2 invoice get' => [
            '/v2/invoice/get',
            'POST',
            static fn (object $client): mixed => $client->invoiceV2()->get(['invoice_id' => 1]),
        ];
    }
}
