<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\Tests;

use PhpSoftBox\Http\Message\Response;
use PhpSoftBox\Ozon\Tests\Support\CreatesOzonClient;
use PHPUnit\Framework\TestCase;

final class OzonBackofficeApiTest extends TestCase
{
    use CreatesOzonClient;

    /**
     * @param callable(object): mixed $invoke
     *
     * @dataProvider backofficeRoutesProvider
     */
    public function testBackofficeRoutes(string $expectedPath, string $expectedMethod, callable $invoke): void
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
    public static function backofficeRoutesProvider(): iterable
    {
        yield 'v1 report info' => [
            '/v1/report/info',
            'POST',
            static fn (object $client): mixed => $client->reportV1()->info(['code' => 'r1']),
        ];
        yield 'v1 report list' => [
            '/v1/report/list',
            'POST',
            static fn (object $client): mixed => $client->reportV1()->list(['limit' => 10]),
        ];
        yield 'v1 report products create' => [
            '/v1/report/products/create',
            'POST',
            static fn (object $client): mixed => $client->reportV1()->productsCreate(['language' => 'RU']),
        ];
        yield 'v2 report returns create' => [
            '/v2/report/returns/create',
            'POST',
            static fn (object $client): mixed => $client->reportV2()->returnsCreate(['date_from' => '2026-01-01']),
        ];
        yield 'v1 report postings create' => [
            '/v1/report/postings/create',
            'POST',
            static fn (object $client): mixed => $client->reportV1()->postingsCreate(['date_from' => '2026-01-01']),
        ];
        yield 'v1 report discounted create' => [
            '/v1/report/discounted/create',
            'POST',
            static fn (object $client): mixed => $client->reportV1()->discountedCreate(['date_from' => '2026-01-01']),
        ];
        yield 'v1 report warehouse stock' => [
            '/v1/report/warehouse/stock',
            'POST',
            static fn (object $client): mixed => $client->reportV1()->warehouseStock(['warehouse_id' => 1]),
        ];
        yield 'v1 report placement by products create' => [
            '/v1/report/placement/by-products/create',
            'POST',
            static fn (object $client): mixed => $client->reportV1()->placementByProductsCreate(['date_from' => '2026-01-01']),
        ];
        yield 'v1 report placement by supplies create' => [
            '/v1/report/placement/by-supplies/create',
            'POST',
            static fn (object $client): mixed => $client->reportV1()->placementBySuppliesCreate(['date_from' => '2026-01-01']),
        ];
        yield 'v1 report marked products sales create' => [
            '/v1/report/marked-products-sales/create',
            'POST',
            static fn (object $client): mixed => $client->reportV1()->markedProductsSalesCreate(['date_from' => '2026-01-01']),
        ];

        yield 'v2 analytics stock on warehouses' => [
            '/v2/analytics/stock_on_warehouses',
            'POST',
            static fn (object $client): mixed => $client->analyticsV2()->stockOnWarehouses(['limit' => 10]),
        ];
        yield 'v1 analytics turnover stocks' => [
            '/v1/analytics/turnover/stocks',
            'POST',
            static fn (object $client): mixed => $client->analyticsV1()->turnoverStocks(['date_from' => '2026-01-01']),
        ];
        yield 'v1 analytics average delivery time' => [
            '/v1/analytics/average-delivery-time',
            'POST',
            static fn (object $client): mixed => $client->analyticsV1()->averageDeliveryTime(['date_from' => '2026-01-01']),
        ];
        yield 'v1 analytics average delivery time details' => [
            '/v1/analytics/average-delivery-time/details',
            'POST',
            static fn (object $client): mixed => $client->analyticsV1()->averageDeliveryTimeDetails(['date_from' => '2026-01-01']),
        ];
        yield 'v1 analytics average delivery time summary' => [
            '/v1/analytics/average-delivery-time/summary',
            'POST',
            static fn (object $client): mixed => $client->analyticsV1()->averageDeliveryTimeSummary(['date_from' => '2026-01-01']),
        ];
        yield 'v1 analytics stocks' => [
            '/v1/analytics/stocks',
            'POST',
            static fn (object $client): mixed => $client->analyticsV1()->stocks(['date_from' => '2026-01-01']),
        ];
        yield 'v1 analytics data' => [
            '/v1/analytics/data',
            'POST',
            static fn (object $client): mixed => $client->analyticsV1()->data(['date_from' => '2026-01-01']),
        ];
        yield 'v1 analytics product queries' => [
            '/v1/analytics/product-queries',
            'POST',
            static fn (object $client): mixed => $client->analyticsV1()->productQueries(['date_from' => '2026-01-01']),
        ];
        yield 'v1 analytics product queries details' => [
            '/v1/analytics/product-queries/details',
            'POST',
            static fn (object $client): mixed => $client->analyticsV1()->productQueriesDetails(['date_from' => '2026-01-01']),
        ];
        yield 'v1 analytics manage stocks' => [
            '/v1/analytics/manage/stocks',
            'POST',
            static fn (object $client): mixed => $client->analyticsV1()->manageStocks(['date_from' => '2026-01-01']),
        ];

        yield 'v1 finance cash flow statement list' => [
            '/v1/finance/cash-flow-statement/list',
            'POST',
            static fn (object $client): mixed => $client->financeV1()->cashFlowStatementList(['date_from' => '2026-01-01']),
        ];
        yield 'v2 finance realization' => [
            '/v2/finance/realization',
            'POST',
            static fn (object $client): mixed => $client->financeV2()->realization(['date_from' => '2026-01-01']),
        ];
        yield 'v1 finance realization posting' => [
            '/v1/finance/realization/posting',
            'POST',
            static fn (object $client): mixed => $client->financeV1()->realizationPosting(['posting_number' => 'p1']),
        ];
        yield 'v3 finance transaction list' => [
            '/v3/finance/transaction/list',
            'POST',
            static fn (object $client): mixed => $client->financeV3()->transactionList(['page' => 1]),
        ];
        yield 'v3 finance transaction totals' => [
            '/v3/finance/transaction/totals',
            'POST',
            static fn (object $client): mixed => $client->financeV3()->transactionTotals(['date_from' => '2026-01-01']),
        ];
        yield 'v1 finance document b2b sales' => [
            '/v1/finance/document-b2b-sales',
            'POST',
            static fn (object $client): mixed => $client->financeV1()->documentB2bSales(['date_from' => '2026-01-01']),
        ];
        yield 'v1 finance document b2b sales json' => [
            '/v1/finance/document-b2b-sales/json',
            'POST',
            static fn (object $client): mixed => $client->financeV1()->documentB2bSalesJson(['date_from' => '2026-01-01']),
        ];
        yield 'v1 finance mutual settlement' => [
            '/v1/finance/mutual-settlement',
            'POST',
            static fn (object $client): mixed => $client->financeV1()->mutualSettlement(['date_from' => '2026-01-01']),
        ];
        yield 'v1 finance products buyout' => [
            '/v1/finance/products/buyout',
            'POST',
            static fn (object $client): mixed => $client->financeV1()->productsBuyout(['date_from' => '2026-01-01']),
        ];
        yield 'v1 finance compensation' => [
            '/v1/finance/compensation',
            'POST',
            static fn (object $client): mixed => $client->financeV1()->compensation(['date_from' => '2026-01-01']),
        ];
        yield 'v1 finance decompensation' => [
            '/v1/finance/decompensation',
            'POST',
            static fn (object $client): mixed => $client->financeV1()->decompensation(['date_from' => '2026-01-01']),
        ];
        yield 'v1 finance balance' => [
            '/v1/finance/balance',
            'POST',
            static fn (object $client): mixed => $client->financeV1()->balance(),
        ];
        yield 'v1 finance realization by day' => [
            '/v1/finance/realization/by-day',
            'POST',
            static fn (object $client): mixed => $client->financeV1()->realizationByDay(['date_from' => '2026-01-01']),
        ];

        yield 'v1 rating summary' => [
            '/v1/rating/summary',
            'POST',
            static fn (object $client): mixed => $client->ratingV1()->summary(),
        ];
        yield 'v1 rating history' => [
            '/v1/rating/history',
            'POST',
            static fn (object $client): mixed => $client->ratingV1()->history(['date_from' => '2026-01-01']),
        ];
        yield 'v1 rating index fbs info' => [
            '/v1/rating/index/fbs/info',
            'POST',
            static fn (object $client): mixed => $client->ratingV1()->indexFbsInfo(),
        ];
    }
}
