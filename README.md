# PhpSoftBox Ozon

## About
`phpsoftbox/ozon` — базовый PSR-18 клиент для Ozon Seller API.

План полного переноса endpoint-ов: [docs/ozon-migration-matrix.md](docs/ozon-migration-matrix.md).

Компонент включает:
- `OzonApiClient` с универсальным методом `request()`;
- базовые HTTP-методы `get()`, `post()`, `put()`, `patch()`, `delete()`;
- helper-структуру версий API: `v1()...v6()` и `version()`;
- низкоуровневые ответы возвращаются как `OzonApiResponse`, совместимый с `PhpSoftBox\Collection\Collection`;
- `OzonApiResponse::makeDto()` для преобразования ответа в DTO;
- предметные обертки для частых endpoint-ов:
- `descriptionCategoryV1()->tree()`, `descriptionCategoryV1()->attributes()`, `attributeValues()`, `searchAttributeValues()`;
- `productV1()->infoDescription()`, `importInfo()`, `importPrices()`, `importBySku()`, `attributesUpdate()`, `picturesImport()`, `archive()`, `unarchive()`, `infoDiscounted()`, `infoStocksByWarehouseFbs()`, `pricesDetails()`, `ratingBySku()`, `updateOfferId()`, `infoSubscription()`, `relatedSkuGet()`, `infoWrongVolume()`, `placementZoneInfo()`, `infoWarehouseStocks()`, `updateDiscount()`, `actionTimerUpdate()`, `actionTimerStatus()`, `digitalStocksImport()`, `certificationList()`, `visibilitySet()`, `quantInfo()`, `quantList()`, `stairwayDiscountByQuantityGet()`, `stairwayDiscountByQuantitySet()`;
- `productV2()->stocks()`, `delete()`, `picturesInfo()`, `infoStocksByWarehouseFbs()`, `certificationList()`;
- `productV3()->list()`, `productV3()->infoList()`, `productV3()->listCount()`, `productV3()->import()`;
- `productV4()->infoAttributes()`, `infoLimit()`, `infoStocks()`;
- `productV5()->request()`, `infoPrices()`;
- `barcodeV1()->add()`, `generate()`;
- FBO/FBS posting:
- `assemblyFbsV1()->postingList()`, `assemblyFbsV1()->productList()`;
- `postingFbsV1()->productExemplarUpdate()`, `carriageAvailableList()`, `cancelReason()`, `packageLabelCreate()`, `packageLabelGet()`, `pickUpCodeVerify()`, `productTraceableAttribute()`, `restrictions()`, `split()`, `timeslotChangeRestrictions()`, `timeslotSet()`, `traceableSplit()`, `globalEtgb()`, `ratingIndexPostingList()`;
- `postingFboV1()->cancelReasonList()`;
- `postingFboV2()->list()`, `postingFboV2()->get()`;
- `postingFbsV3()->list()`, `postingFbsV3()->get()`, `unfulfilledList()`, `setMultiBoxQty()`;
- `postingFbsV2()->actCreate()`, `actCheckStatus()`, `actList()`, `actGetPostings()`, `actGetBarcode()`, `actGetBarcodeText()`, `actGetPdf()`, `actGetContainerLabels()`, `digitalActCheckStatus()`, `digitalActGetPdf()`, `packageLabel()`, `packageLabelCreate()`, `productCountryList()`, `productCountrySet()`, `cancel()`, `cancelReasons()`, `lastMile()`, `arbitration()`, `awaitingDelivery()`, `productCancel()`, `getByBarcode()`, `setTrackingNumber()`, `delivering()`, `delivered()`;
- `postingFbsV4()->ship()`, `postingFbsV4()->shipPackage()`;
- `postingFbsV5()->productExemplarStatus()`, `productExemplarValidate()`;
- `postingFbsV6()->productExemplarCreateOrGet()`, `productExemplarSet()`;
- supply:
- `supplierV1()->availableWarehouses()`;
- `supplyOrderV1()->bundle()`, `cancel()`, `cancelStatus()`, `contentUpdate()`, `contentUpdateStatus()`, `contentUpdateValidation()`, `details()`, `passCreate()`, `passStatus()`, `statusCounter()`, `timeslotGet()`, `timeslotStatus()`, `timeslotUpdate()`;
- `supplyOrderV3()->list()`, `supplyOrderV3()->get()`;
- logistics cargoes/carriage/draft/fbp:
- `assemblyCarriageV1()->postingList()`, `productList()`;
- `cargoesLabelV1()->create()`, `get()`, `file()`;
- `cargoesV1()->create*()`, `delete*()`, `get()`, `rulesGet()`;
- `cargoesV2()->createInfo()`;
- `carriageV1()->actDiscrepancyPdf()`, `approve()`, `cancel()`, `create()`, `deliveryList()`, `ettnStatus()`, `get()`, `pass*()`, `setPostings()`;
- `carriageV2()->deliveryList()`;
- `draftV1()->create*()`, `crossdockCreate()`, `directCreate()`, `multiClusterCreate()`, `supply*()`, `timeslotInfo()`;
- `draftV2()->createInfo()`, `supply*()`, `timeslotInfo()`;
- `fbpV1()->act*()`, `archive*()`, `draft*()`, `label*()`, `order*()`, `warehouseList()`;
- engagement/feedback/queries:
- `notificationV1()->check()`, `delete()`, `enable()`, `list()`, `pushTypeList()`, `set()`, `update()`;
- `questionV1()->answer*()`, `changeStatus()`, `count()`, `info()`, `list()`, `topSku()`;
- `reviewV1()->changeStatus()`, `comment*()`, `count()`, `info()`, `list()`;
- `receiptsV1()->get()`, `sellerList()`, `upload()`;
- `searchQueriesV1()->text()`, `top()`;
- `sellerV1()->info()`, `ozonLogisticsInfo()`;
- `rolesV1()->list()`;
- utility logistics/platform:
- `clusterV1()->list()`, `clusterV2()->list()`;
- `deliveryV1()->check()`, `map()`, `pointInfo()`, `pointList()`;
- `deliveryV2()->checkout()`;
- `passV1()->list()`;
- `polygonV1()->bind()`, `create()`, `delete()`, `list()`, `timeCoordinatesUpdate()`, `timeSet()`;
- `polygonV2()->bind()`;
- `removalV1()->fromStockList()`, `fromSupplyList()`;
- `orderV2()->create()`;
- commercial/promotions:
- `actionsV1()->list()`, `candidates()`, `products()`, `productsActivate()`, `productsDeactivate()`, `discountsTaskList()`, `discountsTaskApprove()`, `discountsTaskDecline()`;
- `actionsV2()->discountsTaskList()`;
- `sellerActionsV1()->create*()`, `update*()`, `productsAdd()`, `productsCandidates()`, `productsDelete()`, `productsList()`, `archive()`, `changeActivity()`, `list()`, `voucherGet()`;
- pricing/warehouses/certificates:
- `pricingStrategyV1()->list()`, `create()`, `info()`, `update()`, `competitorsList()`, `productsAdd()`, `productsList()`, `productsDelete()`, `productInfo()`, `strategyIdsByProductIds()`, `status()`, `delete()`;
- `warehouseV1()->list()`, `operationStatus()`, `archive()`, `unarchive()`, `fboList()`, `fboSellerList()`, `ozonList()`, `rfbsPause()`, `rfbsUnpause()`, `fbs*()`, `erfbs*()`;
- `warehouseV2()->list()`;
- `deliveryMethodV1()->list()`, `returnSettingsGet()`;
- `deliveryMethodV2()->list()`;
- `productCertificateV1()->accordanceTypes()`, `types()`, `create()`, `bind()`, `delete()`, `info()`, `list()`, `productStatusList()`, `productsList()`, `unbind()`, `rejectionReasonsList()`, `statusList()`;
- `productCertificateV2()->accordanceTypesList()`;
- `brandV1()->companyCertificationList()`;
- operations (returns/cancellations/chats/invoices):
- `cancelReasonV1()->list()`, `listByOrder()`, `listByPosting()`;
- `orderV1()->cancel()`, `cancelCheck()`, `cancelStatus()`;
- `postingV1()->cancel()`, `cancelStatus()`, `cutoffSet()`, `digitalCodesUpload()`, `digitalList()`, `marks()`, `unpaidLegalProductList()`;
- `conditionalCancellationV2()->list()`, `approve()`, `reject()`;
- `returnsV1()->list()`, `companyFbsInfo()`, `settingsUtilization*()`, `rfbsActionSet()`, `giveout*()`, `pass*()`;
- `returnsRfbsV2()->list()`, `get()`, `reject()`, `compensate()`, `verify()`, `receiveReturn()`, `returnMoney()`;
- `chatV1()->sendFile()`, `sendMessage()`, `start()`;
- `chatV2()->list()`, `read()`;
- `chatV3()->list()`, `history()`;
- `invoiceV1()->fileUpload()`, `delete()`;
- `invoiceV2()->createOrUpdate()`, `get()`;
- backoffice (reports/analytics/finance/rating):
- `reportV1()->info()`, `list()`, `productsCreate()`, `postingsCreate()`, `discountedCreate()`, `warehouseStock()`, `placementByProductsCreate()`, `placementBySuppliesCreate()`, `markedProductsSalesCreate()`;
- `reportV2()->returnsCreate()`;
- `analyticsV1()->turnoverStocks()`, `averageDeliveryTime()`, `averageDeliveryTimeDetails()`, `averageDeliveryTimeSummary()`, `stocks()`, `data()`, `productQueries()`, `productQueriesDetails()`, `manageStocks()`;
- `analyticsV2()->stockOnWarehouses()`;
- `financeV1()->cashFlowStatementList()`, `realizationPosting()`, `documentB2bSales()`, `documentB2bSalesJson()`, `mutualSettlement()`, `productsBuyout()`, `compensation()`, `decompensation()`, `balance()`, `realizationByDay()`;
- `financeV2()->realization()`;
- `financeV3()->transactionList()`, `transactionTotals()`;
- `ratingV1()->summary()`, `history()`, `indexFbsInfo()`;
- `OzonException` со статусом и payload ответа.

## Quick Start
```php
use PhpSoftBox\Http\Message\RequestFactory;
use PhpSoftBox\Http\Message\StreamFactory;
use PhpSoftBox\Ozon\OzonApiClient;

$client = new OzonApiClient(
    clientId: $_ENV['OZON_CLIENT_ID'],
    apiKey: $_ENV['OZON_API_KEY'],
    httpClient: $psr18Client,
    requestFactory: new RequestFactory(),
    streamFactory: new StreamFactory(),
);

$response = $client->post('/v3/product/info/list', [
    'offer_id' => ['SKU-1'],
]);
$items = $response->getPath('result.items', []);

// Для endpoint-ов, которые есть в DTO-карте, makeDto() сам подставит класс ответа:
$balance = $client
    ->v1('finance')
    ->post('/balance')
    ->makeDto();

// Для ручных DTO пока можно передать класс явно:
$prices = $client
    ->v5('product/info')
    ->post('/prices', [
        'filter' => ['offer_id' => ['SKU-1']],
        'limit'  => 100,
    ])
    ->makeDto(\PhpSoftBox\Ozon\Dto\V5\Product\GetProductInfoPricesV5Response::class);

$firstPrice = $prices->items[0]->price?->price ?? null;

// Версионированный helper (удобно для структуры Ozon API):
$response = $client->v3('product')->post('/list', [
    'filter' => [
        'offer_id' => ['SKU-1'],
    ],
    'limit' => 100,
]);

// Или через универсальный version():
$response = $client->version('v4', 'product')->post('/info/attributes', [
    'filter' => [
        'offer_id' => ['SKU-1'],
    ],
    'limit' => 100,
]);

// Предметные методы:
$categories = $client->descriptionCategoryV1()->tree(language: 'RU');

$products = $client->productV3()->list(
    filter: ['visibility' => 'ALL'],
    lastId: null,
    limit: 100,
);

$attributes = $client->productV4()->infoAttributes(
    filter: ['offer_id' => ['SKU-1']],
    limit: 100,
);

// Wrapper-ы возвращают response/collection; DTO можно получить явно:
$prices = $client->productV5()->infoPrices([
    'filter' => ['offer_id' => ['SKU-1']],
    'limit'  => 100,
])->makeDto(\PhpSoftBox\Ozon\Dto\V5\Product\GetProductInfoPricesV5Response::class);

// FBO/FBS posting:
$fboList = $client->postingFboV2()->list([
    'limit' => 100,
]);

$fbsList = $client->postingFbsV3()->list([
    'limit' => 100,
]);
```

## Генерация DTO

DTO генерируются из локального `docs/swagger.json`:

```bash
vendor/bin/psb ozon:openapi:generate-dto --version=all
```

Для одной версии:

```bash
vendor/bin/psb ozon:openapi:generate-dto --version=v2
```

Команда обновляет `src/Dto/V*` и `src/Dto/OzonResponseDtoMap.php`. Wrapper-классы по умолчанию не меняются: основной контракт остается `OzonApiResponse`/`Collection`, а DTO создаются явно через `->makeDto()`.
