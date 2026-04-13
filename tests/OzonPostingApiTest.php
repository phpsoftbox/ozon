<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\Tests;

use PhpSoftBox\Http\Message\Response;
use PhpSoftBox\Ozon\Dto\V5\Posting\FbsPostingProductExemplarStatusV5Response;
use PhpSoftBox\Ozon\Dto\V5\Posting\FbsPostingProductExemplarValidateV5Response;
use PhpSoftBox\Ozon\Tests\Support\CreatesOzonClient;
use PHPUnit\Framework\TestCase;

final class OzonPostingApiTest extends TestCase
{
    use CreatesOzonClient;

    /**
     * Проверяет FBO posting API v2: list().
     */
    public function testPostingFboV2ListBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"postings":[]}}'));

        $client->postingFboV2()->list([
            'limit' => 100,
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v2/posting/fbo/list', (string) $request->getUri());
        self::assertStringContainsString('"limit":100', (string) $request->getBody());
    }

    /**
     * Проверяет FBS posting API v3: get().
     */
    public function testPostingFbsV3GetBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"posting_number":"123"}}'));

        $client->postingFbsV3()->get([
            'posting_number' => '123',
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v3/posting/fbs/get', (string) $request->getUri());
        self::assertStringContainsString('"posting_number":"123"', (string) $request->getBody());
    }

    /**
     * Проверяет FBS posting API v3: unfulfilled/list.
     */
    public function testPostingFbsV3UnfulfilledListBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"postings":[]}}'));

        $client->postingFbsV3()->unfulfilledList([
            'limit' => 100,
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v3/posting/fbs/unfulfilled/list', (string) $request->getUri());
        self::assertStringContainsString('"limit":100', (string) $request->getBody());
    }

    /**
     * Проверяет FBS posting API v3: multiboxqty/set.
     */
    public function testPostingFbsV3SetMultiBoxQtyBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"ok":true}}'));

        $client->postingFbsV3()->setMultiBoxQty([
            'posting_number' => '123',
            'multi_box_qty'  => 2,
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v3/posting/multiboxqty/set', (string) $request->getUri());
        self::assertStringContainsString('"posting_number":"123"', (string) $request->getBody());
        self::assertStringContainsString('"multi_box_qty":2', (string) $request->getBody());
    }

    /**
     * Проверяет FBS posting API v4: ship.
     */
    public function testPostingFbsV4ShipBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"ok":true}}'));

        $client->postingFbsV4()->ship([
            'posting_number' => '123',
            'packages'       => [],
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v4/posting/fbs/ship', (string) $request->getUri());
        self::assertStringContainsString('"posting_number":"123"', (string) $request->getBody());
    }

    /**
     * Проверяет FBS posting API v4: ship/package.
     */
    public function testPostingFbsV4ShipPackageBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"ok":true}}'));

        $client->postingFbsV4()->shipPackage([
            'posting_number' => '123',
            'products'       => [],
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v4/posting/fbs/ship/package', (string) $request->getUri());
        self::assertStringContainsString('"posting_number":"123"', (string) $request->getBody());
    }

    /**
     * Проверяет FBS posting API v2: act/create.
     */
    public function testPostingFbsV2ActCreateBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"id":1}}'));

        $client->postingFbsV2()->actCreate([
            'delivery_method_id' => 1,
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v2/posting/fbs/act/create', (string) $request->getUri());
        self::assertStringContainsString('"delivery_method_id":1', (string) $request->getBody());
    }

    /**
     * Проверяет FBS posting API v2: act/list.
     */
    public function testPostingFbsV2ActListBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"items":[]}}'));

        $client->postingFbsV2()->actList([
            'limit' => 20,
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v2/posting/fbs/act/list', (string) $request->getUri());
        self::assertStringContainsString('"limit":20', (string) $request->getBody());
    }

    /**
     * Проверяет FBS posting API v2: act/get-pdf.
     */
    public function testPostingFbsV2ActGetPdfBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"file":"base64"}}'));

        $client->postingFbsV2()->actGetPdf([
            'id' => 1,
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v2/posting/fbs/act/get-pdf', (string) $request->getUri());
        self::assertStringContainsString('"id":1', (string) $request->getBody());
    }

    /**
     * Проверяет FBS posting API v2: act/get-container-labels.
     */
    public function testPostingFbsV2ActGetContainerLabelsBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"file":"base64"}}'));

        $client->postingFbsV2()->actGetContainerLabels([
            'id' => 1,
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v2/posting/fbs/act/get-container-labels', (string) $request->getUri());
        self::assertStringContainsString('"id":1', (string) $request->getBody());
    }

    /**
     * Проверяет FBS posting API v2: act/get-barcode/text.
     */
    public function testPostingFbsV2ActGetBarcodeTextBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"barcode":"123"}}'));

        $client->postingFbsV2()->actGetBarcodeText([
            'id' => 1,
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v2/posting/fbs/act/get-barcode/text', (string) $request->getUri());
        self::assertStringContainsString('"id":1', (string) $request->getBody());
    }

    /**
     * Проверяет FBS posting API v2: digital/act/check-status.
     */
    public function testPostingFbsV2DigitalActCheckStatusBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"status":"processing"}}'));

        $client->postingFbsV2()->digitalActCheckStatus([
            'id' => 1,
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v2/posting/fbs/digital/act/check-status', (string) $request->getUri());
        self::assertStringContainsString('"id":1', (string) $request->getBody());
    }

    /**
     * Проверяет FBS posting API v2: digital/act/get-pdf.
     */
    public function testPostingFbsV2DigitalActGetPdfBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"file":"base64"}}'));

        $client->postingFbsV2()->digitalActGetPdf([
            'id' => 1,
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v2/posting/fbs/digital/act/get-pdf', (string) $request->getUri());
        self::assertStringContainsString('"id":1', (string) $request->getBody());
    }

    /**
     * Проверяет FBS posting API v2: cancel.
     */
    public function testPostingFbsV2CancelBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"ok":true}}'));

        $client->postingFbsV2()->cancel([
            'posting_number'   => '123',
            'cancel_reason_id' => 1,
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v2/posting/fbs/cancel', (string) $request->getUri());
        self::assertStringContainsString('"posting_number":"123"', (string) $request->getBody());
    }

    /**
     * Проверяет FBS posting API v2: cancel-reason/list.
     */
    public function testPostingFbsV2CancelReasonsBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"reasons":[]}}'));

        $client->postingFbsV2()->cancelReasons();

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v2/posting/fbs/cancel-reason/list', (string) $request->getUri());
    }

    /**
     * Проверяет FBS posting API v2: last-mile.
     */
    public function testPostingFbsV2LastMileBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"ok":true}}'));

        $client->postingFbsV2()->lastMile([
            'posting_number' => '123',
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v2/fbs/posting/last-mile', (string) $request->getUri());
        self::assertStringContainsString('"posting_number":"123"', (string) $request->getBody());
    }

    /**
     * Проверяет FBS posting API v2: arbitration.
     */
    public function testPostingFbsV2ArbitrationBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"ok":true}}'));

        $client->postingFbsV2()->arbitration([
            'posting_number' => '123',
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v2/posting/fbs/arbitration', (string) $request->getUri());
        self::assertStringContainsString('"posting_number":"123"', (string) $request->getBody());
    }

    /**
     * Проверяет FBS posting API v2: awaiting-delivery.
     */
    public function testPostingFbsV2AwaitingDeliveryBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"ok":true}}'));

        $client->postingFbsV2()->awaitingDelivery([
            'posting_number' => '123',
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v2/posting/fbs/awaiting-delivery', (string) $request->getUri());
        self::assertStringContainsString('"posting_number":"123"', (string) $request->getBody());
    }

    /**
     * Проверяет FBS posting API v2: get-by-barcode.
     */
    public function testPostingFbsV2GetByBarcodeBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"posting_number":"123"}}'));

        $client->postingFbsV2()->getByBarcode([
            'barcode' => 'ABC123',
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v2/posting/fbs/get-by-barcode', (string) $request->getUri());
        self::assertStringContainsString('"barcode":"ABC123"', (string) $request->getBody());
    }

    /**
     * Проверяет FBS posting API v2: tracking-number/set.
     */
    public function testPostingFbsV2SetTrackingNumberBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"ok":true}}'));

        $client->postingFbsV2()->setTrackingNumber([
            'tracking_numbers' => [],
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v2/fbs/posting/tracking-number/set', (string) $request->getUri());
        self::assertStringContainsString('"tracking_numbers":[]', (string) $request->getBody());
    }

    /**
     * Проверяет FBS posting API v2: delivering.
     */
    public function testPostingFbsV2DeliveringBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"ok":true}}'));

        $client->postingFbsV2()->delivering([
            'posting_number' => '123',
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v2/fbs/posting/delivering', (string) $request->getUri());
        self::assertStringContainsString('"posting_number":"123"', (string) $request->getBody());
    }

    /**
     * Проверяет FBS posting API v2: delivered.
     */
    public function testPostingFbsV2DeliveredBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"ok":true}}'));

        $client->postingFbsV2()->delivered([
            'posting_number' => '123',
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v2/fbs/posting/delivered', (string) $request->getUri());
        self::assertStringContainsString('"posting_number":"123"', (string) $request->getBody());
    }

    /**
     * Проверяет FBS posting API v2: package-label/create.
     */
    public function testPostingFbsV2PackageLabelCreateBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"task_id":1}}'));

        $client->postingFbsV2()->packageLabelCreate([
            'posting_number' => ['123'],
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v2/posting/fbs/package-label/create', (string) $request->getUri());
        self::assertStringContainsString('"posting_number":["123"]', (string) $request->getBody());
    }

    /**
     * Проверяет FBS posting API v2: product/cancel.
     */
    public function testPostingFbsV2ProductCancelBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"ok":true}}'));

        $client->postingFbsV2()->productCancel([
            'posting_number' => '123',
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v2/posting/fbs/product/cancel', (string) $request->getUri());
        self::assertStringContainsString('"posting_number":"123"', (string) $request->getBody());
    }

    /**
     * Проверяет FBS posting API v5: product/exemplar/status.
     */
    public function testPostingFbsV5ProductExemplarStatusBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{
            "posting_number": "123",
            "status": "ship_available",
            "products": [
                {
                    "product_id": 10001,
                    "exemplars": [
                        {
                            "exemplar_id": 1,
                            "gtd_error_codes": ["gtd_error"],
                            "marks": [
                                {
                                    "mark": "010460",
                                    "mark_type": "mandatory_mark",
                                    "check_status": "passed"
                                }
                            ]
                        }
                    ]
                }
            ]
        }'));

        $response = $client->postingFbsV5()->productExemplarStatus([
            'posting_number' => '123',
        ])->makeDto(FbsPostingProductExemplarStatusV5Response::class);

        self::assertInstanceOf(FbsPostingProductExemplarStatusV5Response::class, $response);
        self::assertSame('123', $response->postingNumber);
        self::assertSame('ship_available', $response->status);
        self::assertSame(10001, $response->products[0]->productId);
        self::assertSame(1, $response->products[0]->exemplars[0]->exemplarId);
        self::assertSame(['gtd_error'], $response->products[0]->exemplars[0]->gtdErrorCodes);
        self::assertSame('010460', $response->products[0]->exemplars[0]->marks[0]->mark);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v5/fbs/posting/product/exemplar/status', (string) $request->getUri());
        self::assertStringContainsString('"posting_number":"123"', (string) $request->getBody());
    }

    /**
     * Проверяет FBS posting API v5: product/exemplar/validate.
     */
    public function testPostingFbsV5ProductExemplarValidateBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{
            "products": [
                {
                    "product_id": 10001,
                    "valid": false,
                    "error": "invalid_exemplar",
                    "exemplars": [
                        {
                            "valid": false,
                            "errors": ["mark_required"],
                            "marks": [
                                {
                                    "mark": "010460",
                                    "mark_type": "mandatory_mark",
                                    "valid": false,
                                    "errors": ["invalid_mark"]
                                }
                            ]
                        }
                    ]
                }
            ]
        }'));

        $response = $client->postingFbsV5()->productExemplarValidate([
            'posting_number' => '123',
        ])->makeDto(FbsPostingProductExemplarValidateV5Response::class);

        self::assertInstanceOf(FbsPostingProductExemplarValidateV5Response::class, $response);
        self::assertSame(10001, $response->products[0]->productId);
        self::assertFalse($response->products[0]->valid);
        self::assertSame('invalid_exemplar', $response->products[0]->error);
        self::assertSame(['mark_required'], $response->products[0]->exemplars[0]->errors);
        self::assertSame('invalid_mark', $response->products[0]->exemplars[0]->marks[0]->errors[0]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v5/fbs/posting/product/exemplar/validate', (string) $request->getUri());
        self::assertStringContainsString('"posting_number":"123"', (string) $request->getBody());
    }

    /**
     * Проверяет FBS posting API v6: product/exemplar/create-or-get.
     */
    public function testPostingFbsV6ProductExemplarCreateOrGetBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"products":[]}}'));

        $client->postingFbsV6()->productExemplarCreateOrGet([
            'posting_number' => '123',
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v6/fbs/posting/product/exemplar/create-or-get', (string) $request->getUri());
        self::assertStringContainsString('"posting_number":"123"', (string) $request->getBody());
    }

    /**
     * Проверяет FBS posting API v6: product/exemplar/set.
     */
    public function testPostingFbsV6ProductExemplarSetBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"task_id":1}}'));

        $client->postingFbsV6()->productExemplarSet([
            'posting_number' => '123',
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v6/fbs/posting/product/exemplar/set', (string) $request->getUri());
        self::assertStringContainsString('"posting_number":"123"', (string) $request->getBody());
    }

    /**
     * @param callable(object): void $invoke
     *
     * @dataProvider postingLegacyRoutesProvider
     */
    public function testPostingLegacyRoutes(string $expectedPath, callable $invoke): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"ok":true}}'));
        $invoke($client);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString($expectedPath, (string) $request->getUri());
    }

    /**
     * @return iterable<string, array{0: string, 1: callable(object): void}>
     */
    public static function postingLegacyRoutesProvider(): iterable
    {
        yield 'assembly fbs posting list' => [
            '/v1/assembly/fbs/posting/list',
            static fn (object $client): mixed => $client->assemblyFbsV1()->postingList(['limit' => 10]),
        ];
        yield 'assembly fbs product list' => [
            '/v1/assembly/fbs/product/list',
            static fn (object $client): mixed => $client->assemblyFbsV1()->productList(['limit' => 10]),
        ];
        yield 'v1 exemplar update' => [
            '/v1/fbs/posting/product/exemplar/update',
            static fn (object $client): mixed => $client->postingFbsV1()->productExemplarUpdate(['posting_number' => '123']),
        ];
        yield 'v1 carriage available list' => [
            '/v1/posting/carriage-available/list',
            static fn (object $client): mixed => $client->postingFbsV1()->carriageAvailableList(),
        ];
        yield 'v1 cancel reason' => [
            '/v1/posting/fbs/cancel-reason',
            static fn (object $client): mixed => $client->postingFbsV1()->cancelReason(['posting_numbers' => ['123']]),
        ];
        yield 'v1 package label create' => [
            '/v1/posting/fbs/package-label/create',
            static fn (object $client): mixed => $client->postingFbsV1()->packageLabelCreate(['posting_number' => ['123']]),
        ];
        yield 'v1 package label get' => [
            '/v1/posting/fbs/package-label/get',
            static fn (object $client): mixed => $client->postingFbsV1()->packageLabelGet(['task_id' => 1]),
        ];
        yield 'v1 pick-up-code verify' => [
            '/v1/posting/fbs/pick-up-code/verify',
            static fn (object $client): mixed => $client->postingFbsV1()->pickUpCodeVerify(['posting_number' => '123']),
        ];
        yield 'v1 traceable attribute' => [
            '/v1/posting/fbs/product/traceable/attribute',
            static fn (object $client): mixed => $client->postingFbsV1()->productTraceableAttribute(['posting_number' => '123']),
        ];
        yield 'v1 restrictions' => [
            '/v1/posting/fbs/restrictions',
            static fn (object $client): mixed => $client->postingFbsV1()->restrictions(['posting_number' => '123']),
        ];
        yield 'v1 split' => [
            '/v1/posting/fbs/split',
            static fn (object $client): mixed => $client->postingFbsV1()->split(['posting_number' => '123']),
        ];
        yield 'v1 timeslot change restrictions' => [
            '/v1/posting/fbs/timeslot/change-restrictions',
            static fn (object $client): mixed => $client->postingFbsV1()->timeslotChangeRestrictions(['posting_number' => '123']),
        ];
        yield 'v1 timeslot set' => [
            '/v1/posting/fbs/timeslot/set',
            static fn (object $client): mixed => $client->postingFbsV1()->timeslotSet(['posting_number' => '123']),
        ];
        yield 'v1 traceable split' => [
            '/v1/posting/fbs/traceable/split',
            static fn (object $client): mixed => $client->postingFbsV1()->traceableSplit(['posting_number' => '123']),
        ];
        yield 'v1 global etgb' => [
            '/v1/posting/global/etgb',
            static fn (object $client): mixed => $client->postingFbsV1()->globalEtgb(['posting_number' => ['123']]),
        ];
        yield 'v1 rating index fbs posting list' => [
            '/v1/rating/index/fbs/posting/list',
            static fn (object $client): mixed => $client->postingFbsV1()->ratingIndexPostingList(['date_from' => '2026-01-01']),
        ];
        yield 'v1 posting fbo cancel reason list' => [
            '/v1/posting/fbo/cancel-reason/list',
            static fn (object $client): mixed => $client->postingFboV1()->cancelReasonList(),
        ];
        yield 'v3 supply-order list' => [
            '/v3/supply-order/list',
            static fn (object $client): mixed => $client->supplyOrderV3()->list(['limit' => 10]),
        ];
        yield 'v3 supply-order get' => [
            '/v3/supply-order/get',
            static fn (object $client): mixed => $client->supplyOrderV3()->get(['supply_order_id' => 1]),
        ];
    }

    public function testSupplierV1AvailableWarehousesBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"warehouses":[]}}'));
        $client->supplierV1()->availableWarehouses(['limit' => 50]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertSame('GET', $request->getMethod());
        self::assertStringContainsString('/v1/supplier/available_warehouses', (string) $request->getUri());
        self::assertStringContainsString('limit=50', (string) $request->getUri());
    }

    /**
     * @param callable(object): void $invoke
     *
     * @dataProvider supplyOrderV1RoutesProvider
     */
    public function testSupplyOrderV1Routes(string $expectedPath, callable $invoke): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"ok":true}}'));
        $invoke($client);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString($expectedPath, (string) $request->getUri());
    }

    /**
     * @return iterable<string, array{0: string, 1: callable(object): void}>
     */
    public static function supplyOrderV1RoutesProvider(): iterable
    {
        yield 'supply-order bundle' => [
            '/v1/supply-order/bundle',
            static fn (object $client): mixed => $client->supplyOrderV1()->bundle(['supply_order_id' => 1]),
        ];
        yield 'supply-order cancel' => [
            '/v1/supply-order/cancel',
            static fn (object $client): mixed => $client->supplyOrderV1()->cancel(['supply_order_id' => 1]),
        ];
        yield 'supply-order cancel status' => [
            '/v1/supply-order/cancel/status',
            static fn (object $client): mixed => $client->supplyOrderV1()->cancelStatus(['task_id' => 1]),
        ];
        yield 'supply-order content update' => [
            '/v1/supply-order/content/update',
            static fn (object $client): mixed => $client->supplyOrderV1()->contentUpdate(['supply_order_id' => 1]),
        ];
        yield 'supply-order content update status' => [
            '/v1/supply-order/content/update/status',
            static fn (object $client): mixed => $client->supplyOrderV1()->contentUpdateStatus(['task_id' => 1]),
        ];
        yield 'supply-order content update validation' => [
            '/v1/supply-order/content/update/validation',
            static fn (object $client): mixed => $client->supplyOrderV1()->contentUpdateValidation(['supply_order_id' => 1]),
        ];
        yield 'supply-order details' => [
            '/v1/supply-order/details',
            static fn (object $client): mixed => $client->supplyOrderV1()->details(['supply_order_id' => 1]),
        ];
        yield 'supply-order pass create' => [
            '/v1/supply-order/pass/create',
            static fn (object $client): mixed => $client->supplyOrderV1()->passCreate(['supply_order_id' => 1]),
        ];
        yield 'supply-order pass status' => [
            '/v1/supply-order/pass/status',
            static fn (object $client): mixed => $client->supplyOrderV1()->passStatus(['task_id' => 1]),
        ];
        yield 'supply-order status counter' => [
            '/v1/supply-order/status/counter',
            static fn (object $client): mixed => $client->supplyOrderV1()->statusCounter(),
        ];
        yield 'supply-order timeslot get' => [
            '/v1/supply-order/timeslot/get',
            static fn (object $client): mixed => $client->supplyOrderV1()->timeslotGet(['supply_order_id' => 1]),
        ];
        yield 'supply-order timeslot status' => [
            '/v1/supply-order/timeslot/status',
            static fn (object $client): mixed => $client->supplyOrderV1()->timeslotStatus(['task_id' => 1]),
        ];
        yield 'supply-order timeslot update' => [
            '/v1/supply-order/timeslot/update',
            static fn (object $client): mixed => $client->supplyOrderV1()->timeslotUpdate(['supply_order_id' => 1]),
        ];
    }
}
