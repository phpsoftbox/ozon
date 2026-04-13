# PhpSoftBox Ozon

## О компоненте

`phpsoftbox/ozon` — PSR-18 клиент Ozon Seller API для PHP 8.5+.
Он отправляет запросы, добавляет авторизацию, обрабатывает ошибки и возвращает
`OzonApiResponse` (совместимый с `Collection`). По желанию ответ преобразуется
в типизированный DTO через `makeDto()`.

Снимок Swagger, сверенный 2026-09-14, содержит 467 операций — для каждой есть именованная
обёртка. [Полная карта методов и инструкция миграции](docs/ozon-migration-matrix.md)
содержит точные вызовы, 64 добавленные операции и 19 удалённых.
Удаление старых методов и обновление моделей ответа требуют проверки потребителей.

Основные способы работы:

- предметные группы: `productV3()`, `postingFbsV4()`, `postingFboV3()`,
  `supplyOrderV2()`, `carriageV1()`, `cargoesV2()`, `reviewV2()` и другие;
- универсальные маршруты через `v1()...v6()`, `version()` и `request()`;
- явное преобразование ответа через `makeDto()`;
- настраиваемые повторы после серверного HTTP 429;
- `OzonException` с HTTP-статусом и данными ответа.

Новые обёртки принимают массив payload в формате Swagger без переименования полей.
Не путайте версию метода Ozon в URL с версией PHP-пакета: старый endpoint сохраняется,
пока он опубликован в используемом снимке.

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

## Повтор запросов после HTTP 429

Клиент автоматически повторяет запрос после `429 Too Many Requests` для всех
HTTP-методов. Повтор выполняется только после полученного ответа 429: сетевые ошибки,
timeout и другие HTTP-статусы этот механизм не перехватывает.

По умолчанию выполняется не более четырёх попыток, включая первоначальный запрос.
Если Ozon не передал корректную задержку, используются 1, 2 и 4 секунды. Клиент
понимает следующие заголовки:

- `Retry-After` — секунды либо HTTP-date;
- `Item-Retry-After` — минуты до восстановления лимита операций с товарами.

Если в ответе присутствуют оба заголовка, клиент использует наибольшую задержку.
Она также не может быть меньше fallback текущей попытки.

Для каждой попытки создаётся новый body stream из сохранённого JSON. Поэтому полностью
прочитанное предыдущим PSR-18 вызовом тело не влияет на следующий запрос.

### Настройка retry

```php
use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\Retry\OzonRetryEvent;
use PhpSoftBox\Ozon\Retry\RateLimitRetryOptions;

$client = new OzonApiClient(
    clientId: $clientId,
    apiKey: $apiKey,
    httpClient: $psr18Client,
    requestFactory: $requestFactory,
    streamFactory: $streamFactory,
    rateLimitRetry: new RateLimitRetryOptions(
        maxAttempts: 4,
        onRetry: static function (OzonRetryEvent $event): void {
            // Доступны attempt, delaySeconds, method, endpoint и statusCode.
        },
    ),
);
```

`maxAttempts: 1` отключает повторы. Для тестов можно передать реализацию
`SleeperInterface`, чтобы не выполнять реальные задержки.

По умолчанию повтор разрешён для любого запроса. Точечные исключения задаются через
`CallbackRetryableRequestPolicy`:

```php
use PhpSoftBox\Ozon\Retry\CallbackRetryableRequestPolicy;
use Psr\Http\Message\RequestInterface;

$retry = new RateLimitRetryOptions(
    requestPolicy: new CallbackRetryableRequestPolicy(
        static fn (RequestInterface $request): bool => $request->getUri()->getPath() !== '/custom/non-retryable',
    ),
);
```

Для сложных правил можно реализовать `RetryableRequestPolicyInterface`.

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
