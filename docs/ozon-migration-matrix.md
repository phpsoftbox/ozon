# Ozon Seller API: покрытие и миграция

Сверка выполнена 2026-09-14 по обновлённому пользователем [swagger.json](swagger.json).
Официальный источник: [Ozon Seller API Swagger](https://docs.ozon.ru/api/seller/swagger.json).
Прямая загрузка в среде разработки была недоступна (403); дата сверки не является датой публикации Ozon.

SHA-256 снимка: `c51cc090159987fe6d308c110b2b438c33953d38b4d058a4753fa01cfe4a066f`.

## Что означает покрытие

У каждой операции из снимка есть именованный PHP-метод и запись в карте response DTO.
Это покрытие маршрутов и моделей ответа, а не гарантия доступности операции конкретному
продавцу: права, подписка, ограничения и бизнес-валидация остаются на стороне Ozon.

| Показатель | Значение |
|---|---:|
| Операции в предыдущем снимке | 422 |
| Новые операции | 64 |
| Операции, исчезнувшие из снимка | 19 |
| Операции в текущем снимке | 467 |
| Именованные обёртки | 467 |
| Записи response DTO | 467 |
| Сгенерированные DTO | 1454 |

Методы со статусом deprecated сохранены, если они ещё опубликованы в Swagger.
Наличие новой версии само по себе не является основанием удалить старую.
Универсальные `request()` и `vN()` сохраняются; дополнительные helpers не считаются отдельными операциями.
Шаблонный `GET /v1/cargoes-label/file/{file_guid}` учитывается через `cargoesLabelV1()->file($fileGuid)`.

## Как вызвать новый метод

```php
$response = $client->postingFbsV4()->list($payload);
$dto = $response->makeDto();

foreach ($dto->postings as $posting) {
    echo $posting->postingNumber;
}
```

`$payload` должен соответствовать requestBody выбранного маршрута в Swagger.
Новые обёртки передают массив без переименования полей и возвращают `OzonApiResponse`.
Преобразование в DTO остаётся явным. Версия метода — часть маршрута Ozon, не версия PHP-пакета.

## Добавленные операции

Новые группы: `postingFboV3()`, `supplyOrderV2()`, `reviewV2()`,
`postingDigitalV2()`, `postingFbpV1()`. Остальные методы добавлены в существующие группы.

| Операция | Вызов |
|---|---|
| `POST /v2/product/pictures/import` | `productV2()->picturesImport()` |
| `POST /v3/posting/fbo/list` | `postingFboV3()->list()` |
| `POST /v2/supply-order/timeslot/list` | `supplyOrderV2()->timeslotList()` |
| `POST /v1/carriage/courier-contact/set` | `carriageV1()->courierContactSet()` |
| `POST /v1/carriage/courier-contact/get` | `carriageV1()->courierContactGet()` |
| `POST /v4/posting/fbs/unfulfilled/list` | `postingFbsV4()->unfulfilledList()` |
| `POST /v4/posting/fbs/list` | `postingFbsV4()->list()` |
| `POST /v1/product/info/stocks-by-warehouse/fbo` | `productV1()->infoStocksByWarehouseFbo()` |
| `POST /v2/review/comment/delete` | `reviewV2()->commentDelete()` |
| `POST /v2/review/change-status` | `reviewV2()->changeStatus()` |
| `POST /v2/review/count` | `reviewV2()->count()` |
| `POST /v2/review/info` | `reviewV2()->info()` |
| `POST /v2/review/list` | `reviewV2()->list()` |
| `POST /v1/analytics/decommissioned-goods` | `analyticsV1()->decommissionedGoods()` |
| `POST /v1/analytics/category/comparison` | `analyticsV1()->categoryComparison()` |
| `POST /v2/posting/digital/list` | `postingDigitalV2()->list()` |
| `POST /v1/finance/accrual/postings` | `financeV1()->accrualPostings()` |
| `POST /v1/finance/accrual/types` | `financeV1()->accrualTypes()` |
| `POST /v1/finance/accrual/by-day` | `financeV1()->accrualByDay()` |
| `POST /v1/product/visibility/info` | `productV1()->visibilityInfo()` |
| `POST /v1/posting/fbp/get` | `postingFbpV1()->get()` |
| `POST /v1/report/realization/posting/create` | `reportV1()->realizationPostingCreate()` |
| `POST /v2/product/certification/options` | `productV2()->certificationOptions()` |
| `POST /v2/product/certification/params` | `productV2()->certificationParams()` |
| `POST /v2/product/certificate/create` | `productCertificateV2()->create()` |
| `POST /v1/description-category/dependent-attributes` | `descriptionCategoryV1()->dependentAttributes()` |
| `POST /v1/description-category/dependent-attributes/values` | `descriptionCategoryV1()->dependentAttributesValues()` |
| `POST /v1/supply-order/act/summary/get` | `supplyOrderV1()->actSummaryGet()` |
| `POST /v1/supply-order/act/product/get` | `supplyOrderV1()->actProductGet()` |
| `POST /v1/supply-order/act/accept` | `supplyOrderV1()->actAccept()` |
| `POST /v1/supply-order/act/accept/status` | `supplyOrderV1()->actAcceptStatus()` |
| `POST /v1/actions/auto-add/products/list` | `actionsV1()->autoAddProductsList()` |
| `POST /v1/actions/auto-add/products/candidates` | `actionsV1()->autoAddProductsCandidates()` |
| `POST /v1/actions/auto-add/products/delete` | `actionsV1()->autoAddProductsDelete()` |
| `POST /v1/actions/auto-add/products/update` | `actionsV1()->autoAddProductsUpdate()` |
| `POST /v2/cargoes/get` | `cargoesV2()->get()` |
| `POST /v2/cargoes/delete` | `cargoesV2()->delete()` |
| `POST /v2/cargoes/delete/status` | `cargoesV2()->deleteStatus()` |
| `POST /v1/cargoes/transport/activate` | `cargoesV1()->transportActivate()` |
| `POST /v1/cargoes/transport/activate/status` | `cargoesV1()->transportActivateStatus()` |
| `POST /v1/cargoes/transport/create` | `cargoesV1()->transportCreate()` |
| `POST /v1/cargoes/transport/create/status` | `cargoesV1()->transportCreateStatus()` |
| `POST /v1/cargoes/transport/bind` | `cargoesV1()->transportBind()` |
| `POST /v1/cargoes/transport/bind/status` | `cargoesV1()->transportBindStatus()` |
| `POST /v1/cargoes/supplies/get` | `cargoesV1()->suppliesGet()` |
| `POST /v1/cargoes/label/transport-by-order/create` | `cargoesV1()->labelTransportByOrderCreate()` |
| `POST /v1/cargoes/label/transport-by-order/status` | `cargoesV1()->labelTransportByOrderStatus()` |
| `POST /v1/cargoes/label/transport/create` | `cargoesV1()->labelTransportCreate()` |
| `POST /v1/cargoes/label/transport/status` | `cargoesV1()->labelTransportStatus()` |
| `POST /v1/fbp/order/direct/tpl-dlv/edit` | `fbpV1()->orderDirectTplDlvEdit()` |
| `POST /v1/posting/fbp/list` | `postingFbpV1()->list()` |
| `POST /v1/carriage/container/create` | `carriageV1()->containerCreate()` |
| `POST /v1/carriage/container/fill` | `carriageV1()->containerFill()` |
| `POST /v1/carriage/container/approve` | `carriageV1()->containerApprove()` |
| `POST /v1/carriage/container/place-into` | `carriageV1()->containerPlaceInto()` |
| `POST /v1/carriage/container/remove-postings` | `carriageV1()->containerRemovePostings()` |
| `POST /v1/carriage/container/remove-from` | `carriageV1()->containerRemoveFrom()` |
| `POST /v1/carriage/container/cancel` | `carriageV1()->containerCancel()` |
| `POST /v1/carriage/container/list` | `carriageV1()->containerList()` |
| `POST /v1/carriage/container/get` | `carriageV1()->containerGet()` |
| `POST /v1/carriage/container/status/get` | `carriageV1()->containerStatusGet()` |
| `POST /v1/carriage/container/task/info` | `carriageV1()->containerTaskInfo()` |
| `POST /v1/carriage/container/document/get` | `carriageV1()->containerDocumentGet()` |
| `POST /v1/carriage/container/label/get` | `carriageV1()->containerLabelGet()` |

## Удалённые методы: обязательная проверка потребителей

Это breaking change: перечисленные PHP-методы удалены, а не перенаправлены на новые
маршруты с потенциально другим смыслом или payload. Удалены также неиспользуемые
сгенерированные DTO; предыдущая реализация доступна в Git.

| Удалённая операция | Удалённый вызов | Действие в приложении |
|---|---|---|
| `POST /v1/analytics/average-delivery-time` | `analyticsV1()->averageDeliveryTime()` | Прямая замена в снимке не установлена; убрать вызов либо пересмотреть прикладной сценарий. |
| `POST /v1/analytics/average-delivery-time/details` | `analyticsV1()->averageDeliveryTimeDetails()` | Прямая замена в снимке не установлена; убрать вызов либо пересмотреть прикладной сценарий. |
| `POST /v1/analytics/average-delivery-time/summary` | `analyticsV1()->averageDeliveryTimeSummary()` | Прямая замена в снимке не установлена; убрать вызов либо пересмотреть прикладной сценарий. |
| `POST /v1/cargoes/create/info` | `cargoesV1()->createInfo()` | `cargoesV2()->createInfo()`; проверить ответ v2. |
| `POST /v1/draft/create` | `draftV1()->create()` | `draftV1()->directCreate()`, `crossdockCreate()` или `multiClusterCreate()`: выбрать схему поставки и новый payload. |
| `POST /v1/draft/create/info` | `draftV1()->createInfo()` | `draftV2()->createInfo()`; проверить payload/ответ v2. |
| `POST /v1/draft/supply/create` | `draftV1()->supplyCreate()` | `draftV2()->supplyCreate()`; проверить payload/ответ v2. |
| `POST /v1/draft/supply/create/status` | `draftV1()->supplyCreateStatus()` | `draftV2()->supplyCreateStatus()`; проверить payload/ответ v2. |
| `POST /v1/draft/timeslot/info` | `draftV1()->timeslotInfo()` | `draftV2()->timeslotInfo()`; проверить payload/ответ v2. |
| `POST /v1/product/quant/info` | `productV1()->quantInfo()` | Прямая замена в снимке не установлена; убрать вызов либо пересмотреть прикладной сценарий. |
| `POST /v1/product/quant/list` | `productV1()->quantList()` | Прямая замена в снимке не установлена; убрать вызов либо пересмотреть прикладной сценарий. |
| `POST /v1/seller-actions/create/ozon-card-discount` | `sellerActionsV1()->createOzonCardDiscount()` | Прямая замена в снимке не установлена; убрать вызов либо пересмотреть прикладной сценарий. |
| `POST /v1/seller-actions/update/ozon-card-discount` | `sellerActionsV1()->updateOzonCardDiscount()` | Прямая замена в снимке не установлена; убрать вызов либо пересмотреть прикладной сценарий. |
| `POST /v2/chat/list` | `chatV2()->list()` | `chatV3()->list()`; проверить параметры v3. |
| `POST /v2/returns/rfbs/reject` | `returnsRfbsV2()->reject()` | `returnsV1()->rfbsActionSet()`; action_id брать из available_actions ответа `returnsRfbsV2()->get()`, не подменять операции механически. |
| `POST /v2/returns/rfbs/compensate` | `returnsRfbsV2()->compensate()` | `returnsV1()->rfbsActionSet()`; action_id брать из available_actions ответа `returnsRfbsV2()->get()`, не подменять операции механически. |
| `POST /v2/returns/rfbs/verify` | `returnsRfbsV2()->verify()` | `returnsV1()->rfbsActionSet()`; action_id брать из available_actions ответа `returnsRfbsV2()->get()`, не подменять операции механически. |
| `POST /v2/returns/rfbs/receive-return` | `returnsRfbsV2()->receiveReturn()` | `returnsV1()->rfbsActionSet()`; action_id брать из available_actions ответа `returnsRfbsV2()->get()`, не подменять операции механически. |
| `POST /v2/returns/rfbs/return-money` | `returnsRfbsV2()->returnMoney()` | `returnsV1()->rfbsActionSet()`; action_id брать из available_actions ответа `returnsRfbsV2()->get()`, не подменять операции механически. |

Для действий rFBS это концептуальная замена: проверьте доступные действия и параметры
`/v1/returns/rfbs/action/set`. Компонент не угадывает action_id по имени удалённого метода.
Для аналитики среднего времени доставки, эконом-товаров и акций с картой Ozon Банка
эквивалентность другим методам не подтверждена.

## Изменения DTO

Перегенерированы ответы и их зависимости по текущим схемам, включая изменения уже существующих операций.
16 вручную поддерживаемых DTO сохранены. При прямом создании DTO через конструктор
проверьте именованные аргументы и типы; рекомендуемый путь для ответа API — `makeDto()`.

Исправлены две особенности генерации:

- `items` без явного `type: array` распознаётся как массив; вложенные элементы создаются как DTO;
- ссылки на скалярные схемы, включая enum, получают DTO-обёртку с полем `value`,
  а не теряются как `null`; это работает и для списков таких значений.

Например, статус отзыва v2 читается как `$dto->reviews[0]->status?->value`.
Неизвестные значения enum сохраняются; это не строгий PHP enum и не слой валидации.
Неописанные поля объектов по-прежнему доступны в `extra`.

## Проверка и последующее обновление

1. Сохранить официальный Swagger в `docs/swagger.json` и проверить, что это JSON, а не HTML ошибки.
2. Сопоставить пары HTTP-метод + путь со списком ниже.
3. Добавить новые обёртки и удалить исчезнувшие; сохранить опубликованные старые версии.
4. Пересобрать DTO в PHP-контейнере: `vendor/bin/psb ozon:openapi:generate-dto --version=all`.
5. Выполнить `composer test` и `composer cs:check` через Makefile или контейнер.
6. Обновить таблицы и передать потребителям список breaking changes.

`OzonSwaggerAuditTest` проверяет отсутствие пропусков и лишних маршрутов,
соответствие DTO-карты снимку, вызов всех 64 новых методов и удаление 19 старых.
Это локальные транспортные тесты с подменой HTTP-клиента; реальные операции на аккаунте Ozon они не выполняют.

## Полная карта текущих операций

В столбце «Вызов» опущен начальный `$client->`. Все строки ниже реализованы.

| Операция | Вызов | Назначение |
|---|---|---|
| `GET /v1/actions` | `actionsV1()->list()` | Список акций |
| `GET /v1/cargoes-label/file/{file_guid}` | `cargoesLabelV1()->file()` | Получить PDF с этикетками грузовых мест |
| `GET /v1/product/certificate/accordance-types` | `productCertificateV1()->accordanceTypes()` | Список типов соответствия требованиям (версия 1) |
| `GET /v1/product/certificate/types` | `productCertificateV1()->types()` | Справочник типов документов |
| `GET /v1/supplier/available_warehouses` | `supplierV1()->availableWarehouses()` | Загруженность складов Ozon |
| `GET /v2/product/certificate/accordance-types/list` | `productCertificateV2()->accordanceTypesList()` | Список типов соответствия требованиям (версия 2) |
| `POST /v1/actions/auto-add/products/candidates` | `actionsV1()->autoAddProductsCandidates()` | Получить список доступных товаров для автодобавления в акцию |
| `POST /v1/actions/auto-add/products/delete` | `actionsV1()->autoAddProductsDelete()` | Удалить товары из автодобавления в акцию |
| `POST /v1/actions/auto-add/products/list` | `actionsV1()->autoAddProductsList()` | Получить список товаров из автодобавления в акцию |
| `POST /v1/actions/auto-add/products/update` | `actionsV1()->autoAddProductsUpdate()` | Добавить или обновить товары в автодобавлении в акцию |
| `POST /v1/actions/candidates` | `actionsV1()->candidates()` | Список доступных для акции товаров |
| `POST /v1/actions/discounts-task/approve` | `actionsV1()->discountsTaskApprove()` | Согласовать заявку на скидку |
| `POST /v1/actions/discounts-task/decline` | `actionsV1()->discountsTaskDecline()` | Отклонить заявку на скидку |
| `POST /v1/actions/discounts-task/list` | `actionsV1()->discountsTaskList()` | Список заявок на скидку |
| `POST /v1/actions/products` | `actionsV1()->products()` | Список участвующих в акции товаров |
| `POST /v1/actions/products/activate` | `actionsV1()->productsActivate()` | Добавить товар в акцию |
| `POST /v1/actions/products/deactivate` | `actionsV1()->productsDeactivate()` | Удалить товары из акции |
| `POST /v1/analytics/category/comparison` | `analyticsV1()->categoryComparison()` | Получить информацию о сравнении категорий |
| `POST /v1/analytics/data` | `analyticsV1()->data()` | Данные аналитики |
| `POST /v1/analytics/decommissioned-goods` | `analyticsV1()->decommissionedGoods()` | Получить отчёт о списанных товарах |
| `POST /v1/analytics/manage/stocks` | `analyticsV1()->manageStocks()` | Управление остатками |
| `POST /v1/analytics/product-queries` | `analyticsV1()->productQueries()` | Получить информацию о запросах моих товаров |
| `POST /v1/analytics/product-queries/details` | `analyticsV1()->productQueriesDetails()` | Получить детализацию запросов по товару |
| `POST /v1/analytics/stocks` | `analyticsV1()->stocks()` | Получить аналитику по остаткам |
| `POST /v1/analytics/turnover/stocks` | `analyticsV1()->turnoverStocks()` | Оборачиваемость товара |
| `POST /v1/assembly/carriage/posting/list` | `assemblyCarriageV1()->postingList()` | Получить список отправлений в отгрузке |
| `POST /v1/assembly/carriage/product/list` | `assemblyCarriageV1()->productList()` | Получить список товаров в отгрузке |
| `POST /v1/assembly/fbs/posting/list` | `assemblyFbsV1()->postingList()` | Получить список отправлений |
| `POST /v1/assembly/fbs/product/list` | `assemblyFbsV1()->productList()` | Получить список товаров в отправлениях |
| `POST /v1/barcode/add` | `barcodeV1()->add()` | Привязать штрихкод к товару |
| `POST /v1/barcode/generate` | `barcodeV1()->generate()` | Создать штрихкод для товара |
| `POST /v1/brand/company-certification/list` | `brandV1()->companyCertificationList()` | Список сертифицируемых брендов |
| `POST /v1/cancel-reason/list` | `cancelReasonV1()->list()` | Причины отмены отправлений |
| `POST /v1/cancel-reason/list-by-order` | `cancelReasonV1()->listByOrder()` | Причины отмены заказа |
| `POST /v1/cancel-reason/list-by-posting` | `cancelReasonV1()->listByPosting()` | Причины отмены отправления |
| `POST /v1/cargoes-label/create` | `cargoesLabelV1()->create()` | Сгенерировать этикетки для грузомест |
| `POST /v1/cargoes-label/get` | `cargoesLabelV1()->get()` | Получить идентификатор этикетки для грузомест |
| `POST /v1/cargoes/create` | `cargoesV1()->create()` | Установка грузомест |
| `POST /v1/cargoes/delete` | `cargoesV1()->delete()` | Удалить грузоместо в заявке на поставку |
| `POST /v1/cargoes/delete/status` | `cargoesV1()->deleteStatus()` | Информация о статусе удаления грузоместа |
| `POST /v1/cargoes/get` | `cargoesV1()->get()` | Получить информацию о грузоместах |
| `POST /v1/cargoes/label/transport-by-order/create` | `cargoesV1()->labelTransportByOrderCreate()` | Сгенерировать этикетки для транспортных грузомест по идентификатору поставки |
| `POST /v1/cargoes/label/transport-by-order/status` | `cargoesV1()->labelTransportByOrderStatus()` | Получить статус генерации этикеток для транспортных грузомеcт по идентификатору поставки |
| `POST /v1/cargoes/label/transport/create` | `cargoesV1()->labelTransportCreate()` | Сгенерировать этикетки транспортных грузомест по идентификатору грузоместа |
| `POST /v1/cargoes/label/transport/status` | `cargoesV1()->labelTransportStatus()` | Получить статус генерации этикеток транспортных грузомест по идентификатору грузоместа |
| `POST /v1/cargoes/rules/get` | `cargoesV1()->rulesGet()` | Чек-лист по установке грузомест FBO |
| `POST /v1/cargoes/supplies/get` | `cargoesV1()->suppliesGet()` | Получить информацию о грузоместах в поставках |
| `POST /v1/cargoes/transport/activate` | `cargoesV1()->transportActivate()` | Включить или отключить транспортные грузоместа в поставке |
| `POST /v1/cargoes/transport/activate/status` | `cargoesV1()->transportActivateStatus()` | Получить статус включения или отключения транспортных грузомест |
| `POST /v1/cargoes/transport/bind` | `cargoesV1()->transportBind()` | Связать или отвязать грузоместа и транспортные грузоместа |
| `POST /v1/cargoes/transport/bind/status` | `cargoesV1()->transportBindStatus()` | Получить статус связывания или отвязывания грузомест и транспортных грузомест |
| `POST /v1/cargoes/transport/create` | `cargoesV1()->transportCreate()` | Создать транспортное грузоместо |
| `POST /v1/cargoes/transport/create/status` | `cargoesV1()->transportCreateStatus()` | Получить статус создания транспортного грузоместа |
| `POST /v1/carriage/act-discrepancy/pdf` | `carriageV1()->actDiscrepancyPdf()` | Получить акт о расхождениях по отгрузке FBS |
| `POST /v1/carriage/approve` | `carriageV1()->approve()` | Подтверждение отгрузки |
| `POST /v1/carriage/cancel` | `carriageV1()->cancel()` | Удаление отгрузки |
| `POST /v1/carriage/container/approve` | `carriageV1()->containerApprove()` | Подтвердить состав грузоместа |
| `POST /v1/carriage/container/cancel` | `carriageV1()->containerCancel()` | Отменить грузоместо |
| `POST /v1/carriage/container/create` | `carriageV1()->containerCreate()` | Создать грузоместо |
| `POST /v1/carriage/container/document/get` | `carriageV1()->containerDocumentGet()` | Получить документы по грузоместам — ТрН и лист отгрузки |
| `POST /v1/carriage/container/fill` | `carriageV1()->containerFill()` | Наполнить грузоместо отправлениями |
| `POST /v1/carriage/container/get` | `carriageV1()->containerGet()` | Получить информацию о грузоместах |
| `POST /v1/carriage/container/label/get` | `carriageV1()->containerLabelGet()` | Получить этикетку по грузоместам |
| `POST /v1/carriage/container/list` | `carriageV1()->containerList()` | Получить список грузомест |
| `POST /v1/carriage/container/place-into` | `carriageV1()->containerPlaceInto()` | Разместить коробки на палете |
| `POST /v1/carriage/container/remove-from` | `carriageV1()->containerRemoveFrom()` | Убрать коробки с палеты |
| `POST /v1/carriage/container/remove-postings` | `carriageV1()->containerRemovePostings()` | Убрать отправления из грузоместа |
| `POST /v1/carriage/container/status/get` | `carriageV1()->containerStatusGet()` | Получить статус грузомест FBS |
| `POST /v1/carriage/container/task/info` | `carriageV1()->containerTaskInfo()` | Получить статус задачи грузового места |
| `POST /v1/carriage/courier-contact/get` | `carriageV1()->courierContactGet()` | Получить контактные данные продавца для курьера |
| `POST /v1/carriage/courier-contact/set` | `carriageV1()->courierContactSet()` | Добавить или обновить контактные данные продавца для курьера |
| `POST /v1/carriage/create` | `carriageV1()->create()` | Создание отгрузки |
| `POST /v1/carriage/delivery/list` | `carriageV1()->deliveryList()` | Список методов доставки и отгрузок |
| `POST /v1/carriage/ettn/status` | `carriageV1()->ettnStatus()` | Получить статус проверки электронной ТТН на прослеживаемой перевозке FBS |
| `POST /v1/carriage/get` | `carriageV1()->get()` | Информация о перевозке |
| `POST /v1/carriage/pass/create` | `carriageV1()->passCreate()` | Создать пропуск |
| `POST /v1/carriage/pass/delete` | `carriageV1()->passDelete()` | Удалить пропуск |
| `POST /v1/carriage/pass/update` | `carriageV1()->passUpdate()` | Обновить пропуск |
| `POST /v1/carriage/set-postings` | `carriageV1()->setPostings()` | Изменение состава отгрузки |
| `POST /v1/chat/send/file` | `chatV1()->sendFile()` | Отправить файл |
| `POST /v1/chat/send/message` | `chatV1()->sendMessage()` | Отправить сообщение |
| `POST /v1/chat/start` | `chatV1()->start()` | Создать новый чат |
| `POST /v1/cluster/list` | `clusterV1()->list()` | Информация о кластерах и их складах |
| `POST /v1/delivery-method/list` | `deliveryMethodV1()->list()` | Список методов доставки склада |
| `POST /v1/delivery-method/return/settings/get` | `deliveryMethodV1()->returnSettingsGet()` | Получить информацию по возвратным настройкам rFBS и rFBS Express |
| `POST /v1/delivery/check` | `deliveryV1()->check()` | Проверить доступность доставки для покупателя |
| `POST /v1/delivery/map` | `deliveryV1()->map()` | Отрисовать точки на карте |
| `POST /v1/delivery/point/info` | `deliveryV1()->pointInfo()` | Получить информацию о точке самовывоза |
| `POST /v1/delivery/point/list` | `deliveryV1()->pointList()` | Получить список точек самовывоза |
| `POST /v1/description-category/attribute` | `descriptionCategoryV1()->attributes()` | Список характеристик категории |
| `POST /v1/description-category/attribute/values` | `descriptionCategoryV1()->attributeValues()` | Справочник значений характеристики |
| `POST /v1/description-category/attribute/values/search` | `descriptionCategoryV1()->searchAttributeValues()` | Поиск по справочным значениям характеристики |
| `POST /v1/description-category/dependent-attributes` | `descriptionCategoryV1()->dependentAttributes()` | Получить зависимые характеристики |
| `POST /v1/description-category/dependent-attributes/values` | `descriptionCategoryV1()->dependentAttributesValues()` | Получить возможные значения дочерней характеристики |
| `POST /v1/description-category/tree` | `descriptionCategoryV1()->tree()` | Дерево категорий и типов товаров |
| `POST /v1/draft/crossdock/create` | `draftV1()->crossdockCreate()` | Создать черновик заявки на поставку кросс-докингом |
| `POST /v1/draft/direct/create` | `draftV1()->directCreate()` | Создать черновик заявки на прямую поставку |
| `POST /v1/draft/multi-cluster/create` | `draftV1()->multiClusterCreate()` | Создать черновик заявки на поставку для нескольких кластеров |
| `POST /v1/fbp/act-from/create` | `fbpV1()->actFromCreate()` | Сгенерировать акт приёмки |
| `POST /v1/fbp/act-from/get` | `fbpV1()->actFromGet()` | Получить статус генерации акта приёмки |
| `POST /v1/fbp/act-to/create` | `fbpV1()->actToCreate()` | Сгенерировать транспортную накладную |
| `POST /v1/fbp/act-to/get` | `fbpV1()->actToGet()` | Получить статус генерации транспортной накладной |
| `POST /v1/fbp/archive/get` | `fbpV1()->archiveGet()` | Получить информацию о завершённой поставке |
| `POST /v1/fbp/archive/list` | `fbpV1()->archiveList()` | Получить список завершённых поставок |
| `POST /v1/fbp/draft/direct/create` | `fbpV1()->draftDirectCreate()` | Создать черновик заявки на поставку без указания способа доставки |
| `POST /v1/fbp/draft/direct/delete` | `fbpV1()->draftDirectDelete()` | Удалить черновик заявки на поставку |
| `POST /v1/fbp/draft/direct/product/validate` | `fbpV1()->draftDirectProductValidate()` | Проверить список товаров для склада партнёра |
| `POST /v1/fbp/draft/direct/registrate` | `fbpV1()->draftDirectRegistrate()` | Перевести черновик в действующую поставку |
| `POST /v1/fbp/draft/direct/seller-dlv/create` | `fbpV1()->draftDirectSellerDlvCreate()` | Создать черновик с доставкой силами продавца |
| `POST /v1/fbp/draft/direct/seller-dlv/edit` | `fbpV1()->draftDirectSellerDlvEdit()` | Обновить информацию о доставке силами продавца в черновике |
| `POST /v1/fbp/draft/direct/timeslot/edit` | `fbpV1()->draftDirectTimeslotEdit()` | Отредактировать таймслот в черновике |
| `POST /v1/fbp/draft/direct/timeslot/get` | `fbpV1()->draftDirectTimeslotGet()` | Получить список таймслотов для прямой поставки |
| `POST /v1/fbp/draft/direct/tpl-dlv/create` | `fbpV1()->draftDirectTplDlvCreate()` | Создать черновик заявки на доставку сторонней транспортной компанией |
| `POST /v1/fbp/draft/direct/tpl-dlv/edit` | `fbpV1()->draftDirectTplDlvEdit()` | Редактировать черновик поставки со способом доставки сторонней транспортной компанией |
| `POST /v1/fbp/draft/drop-off/create` | `fbpV1()->draftDropOffCreate()` | Создать черновик для доставки в drop-off пункт |
| `POST /v1/fbp/draft/drop-off/delete` | `fbpV1()->draftDropOffDelete()` | Удалить черновик для доставки в drop-off пункт |
| `POST /v1/fbp/draft/drop-off/dlv/edit` | `fbpV1()->draftDropOffDlvEdit()` | Отредактировать детали доставки для drop-off черновика |
| `POST /v1/fbp/draft/drop-off/point/list` | `fbpV1()->draftDropOffPointList()` | Получить список drop-off пунктов в провинции |
| `POST /v1/fbp/draft/drop-off/point/timetable` | `fbpV1()->draftDropOffPointTimetable()` | Получить расписание работы drop-off пункта |
| `POST /v1/fbp/draft/drop-off/product/validate` | `fbpV1()->draftDropOffProductValidate()` | Проверить список товаров, которые склад партнёра может принять |
| `POST /v1/fbp/draft/drop-off/province/list` | `fbpV1()->draftDropOffProvinceList()` | Получить список провинций |
| `POST /v1/fbp/draft/drop-off/registrate` | `fbpV1()->draftDropOffRegistrate()` | Перевести черновик в действующую поставку |
| `POST /v1/fbp/draft/get` | `fbpV1()->draftGet()` | Получить информацию о черновике поставки |
| `POST /v1/fbp/draft/list` | `fbpV1()->draftList()` | Список черновиков поставки |
| `POST /v1/fbp/draft/pick-up/create` | `fbpV1()->draftPickUpCreate()` | Создать черновик заявки на pick-up поставку |
| `POST /v1/fbp/draft/pick-up/delete` | `fbpV1()->draftPickUpDelete()` | Отменить черновик заявки на pick-up поставку |
| `POST /v1/fbp/draft/pick-up/dlv/edit` | `fbpV1()->draftPickUpDlvEdit()` | Изменить черновик заявки на pick-up поставку |
| `POST /v1/fbp/draft/pick-up/product/validate` | `fbpV1()->draftPickUpProductValidate()` | Провалидировать список товаров для pick-up поставки |
| `POST /v1/fbp/draft/pick-up/registrate` | `fbpV1()->draftPickUpRegistrate()` | Перевести черновик в действующую поставку |
| `POST /v1/fbp/label/create` | `fbpV1()->labelCreate()` | Cоздать задание на генерацию этикеток |
| `POST /v1/fbp/label/get` | `fbpV1()->labelGet()` | Получить статус задания на генерацию этикеток |
| `POST /v1/fbp/order/direct/cancel` | `fbpV1()->orderDirectCancel()` | Отменить поставку |
| `POST /v1/fbp/order/direct/seller-dlv/edit` | `fbpV1()->orderDirectSellerDlvEdit()` | Обновить информацию о доставке силами продавца |
| `POST /v1/fbp/order/direct/timeslot/edit` | `fbpV1()->orderDirectTimeslotEdit()` | Отредактировать таймслот в заявке на поставку |
| `POST /v1/fbp/order/direct/timeslot/list` | `fbpV1()->orderDirectTimeslotList()` | Получить список таймслотов для поставки |
| `POST /v1/fbp/order/direct/tpl-dlv/edit` | `fbpV1()->orderDirectTplDlvEdit()` | Обновить информацию о доставке сторонней транспортной компанией |
| `POST /v1/fbp/order/drop-off/cancel` | `fbpV1()->orderDropOffCancel()` | Отменить поставку drop-off |
| `POST /v1/fbp/order/drop-off/dlv/edit` | `fbpV1()->orderDropOffDlvEdit()` | Отредактировать информацию о поставке на drop-off пункт |
| `POST /v1/fbp/order/drop-off/timetable` | `fbpV1()->orderDropOffTimetable()` | Получить график работы drop-off пункта |
| `POST /v1/fbp/order/get` | `fbpV1()->orderGet()` | Получить информацию о конкретной поставке |
| `POST /v1/fbp/order/list` | `fbpV1()->orderList()` | Получить список поставок |
| `POST /v1/fbp/order/pick-up/cancel` | `fbpV1()->orderPickUpCancel()` | Отменить pick-up поставку |
| `POST /v1/fbp/order/pick-up/dlv/edit` | `fbpV1()->orderPickUpDlvEdit()` | Изменить данные о точке забора |
| `POST /v1/fbp/warehouse/list` | `fbpV1()->warehouseList()` | Получить список партнёрских складов |
| `POST /v1/fbs/posting/product/exemplar/update` | `postingFbsV1()->productExemplarUpdate()` | Обновить данные экземпляров |
| `POST /v1/finance/accrual/by-day` | `financeV1()->accrualByDay()` | Получить начисления за день |
| `POST /v1/finance/accrual/postings` | `financeV1()->accrualPostings()` | Получить начисления по отправлениям |
| `POST /v1/finance/accrual/types` | `financeV1()->accrualTypes()` | Получить справочник начислений |
| `POST /v1/finance/balance` | `financeV1()->balance()` | Получить отчёт о балансе |
| `POST /v1/finance/cash-flow-statement/list` | `financeV1()->cashFlowStatementList()` | Финансовый отчёт |
| `POST /v1/finance/compensation` | `financeV1()->compensation()` | Отчёт о компенсациях |
| `POST /v1/finance/decompensation` | `financeV1()->decompensation()` | Отчёт о декомпенсациях |
| `POST /v1/finance/document-b2b-sales` | `financeV1()->documentB2bSales()` | Реестр продаж юридическим лицам |
| `POST /v1/finance/document-b2b-sales/json` | `financeV1()->documentB2bSalesJson()` | Реестр продаж юридическим лицам в JSON-формате |
| `POST /v1/finance/mutual-settlement` | `financeV1()->mutualSettlement()` | Отчёт о взаиморасчётах |
| `POST /v1/finance/products/buyout` | `financeV1()->productsBuyout()` | Отчёт о выкупленных товарах |
| `POST /v1/finance/realization/by-day` | `financeV1()->realizationByDay()` | Отчёт о реализации товаров за день |
| `POST /v1/finance/realization/posting` | `financeV1()->realizationPosting()` | Позаказный отчёт о реализации товаров |
| `POST /v1/invoice/delete` | `invoiceV1()->delete()` | Удалить ссылку на счёт-фактуру |
| `POST /v1/invoice/file/upload` | `invoiceV1()->fileUpload()` | Загрузка счёта-фактуры |
| `POST /v1/notification/check` | `notificationV1()->check()` | Проверить URL-адрес для уведомлений |
| `POST /v1/notification/delete` | `notificationV1()->delete()` | Удалить URL-адрес для уведомлений |
| `POST /v1/notification/enable` | `notificationV1()->enable()` | Включить или выключить уведомления на URL-адрес |
| `POST /v1/notification/list` | `notificationV1()->list()` | Получить информацию по подключённым URL-адресам |
| `POST /v1/notification/push-type/list` | `notificationV1()->pushTypeList()` | Получить типы пуш-уведомлений |
| `POST /v1/notification/set` | `notificationV1()->set()` | Подключить URL-адрес для уведомлений |
| `POST /v1/notification/update` | `notificationV1()->update()` | Изменить URL-адрес для уведомлений |
| `POST /v1/order/cancel` | `orderV1()->cancel()` | Отменить заказ |
| `POST /v1/order/cancel/check` | `orderV1()->cancelCheck()` | Проверить возможность отмены заказа |
| `POST /v1/order/cancel/status` | `orderV1()->cancelStatus()` | Получить статус отмены заказа |
| `POST /v1/pass/list` | `passV1()->list()` | Список пропусков |
| `POST /v1/polygon/bind` | `polygonV1()->bind()` | Свяжите метод доставки с полигоном доставки |
| `POST /v1/polygon/create` | `polygonV1()->create()` | Создайте полигон доставки |
| `POST /v1/polygon/delete` | `polygonV1()->delete()` | Удалить полигон из области доставки |
| `POST /v1/polygon/list` | `polygonV1()->list()` | Получить список установленных полигонов на метод доставки |
| `POST /v1/polygon/time/coordinates/update` | `polygonV1()->timeCoordinatesUpdate()` | Обновить координаты полигона доставки |
| `POST /v1/polygon/time/set` | `polygonV1()->timeSet()` | Установить новое время доставки в полигоне |
| `POST /v1/posting/cancel` | `postingV1()->cancel()` | Отменить отправление из заказа |
| `POST /v1/posting/cancel/status` | `postingV1()->cancelStatus()` | Проверить статус отмены отправления |
| `POST /v1/posting/carriage-available/list` | `postingFbsV1()->carriageAvailableList()` | Список доступных перевозок |
| `POST /v1/posting/cutoff/set` | `postingV1()->cutoffSet()` | Уточнить дату отгрузки отправления |
| `POST /v1/posting/digital/codes/upload` | `postingV1()->digitalCodesUpload()` | Загрузить коды цифровых товаров для отправления |
| `POST /v1/posting/digital/list` | `postingV1()->digitalList()` | Получить список отправлений |
| `POST /v1/posting/fbo/cancel-reason/list` | `postingFboV1()->cancelReasonList()` | Причины отмены отправлений по схеме FBO |
| `POST /v1/posting/fbp/get` | `postingFbpV1()->get()` | Получить информацию об отправлении по идентификатору |
| `POST /v1/posting/fbp/list` | `postingFbpV1()->list()` | Получить список отправлений |
| `POST /v1/posting/fbs/cancel-reason` | `postingFbsV1()->cancelReason()` | Причины отмены отправления |
| `POST /v1/posting/fbs/package-label/create` | `postingFbsV1()->packageLabelCreate()` | Создать задание на выгрузку этикеток |
| `POST /v1/posting/fbs/package-label/get` | `postingFbsV1()->packageLabelGet()` | Получить файл с этикетками |
| `POST /v1/posting/fbs/pick-up-code/verify` | `postingFbsV1()->pickUpCodeVerify()` | Проверить код курьера |
| `POST /v1/posting/fbs/product/traceable/attribute` | `postingFbsV1()->productTraceableAttribute()` | Получить список незаполненных атрибутов для прослеживаемых товаров |
| `POST /v1/posting/fbs/restrictions` | `postingFbsV1()->restrictions()` | Получить ограничения пункта приёма |
| `POST /v1/posting/fbs/split` | `postingFbsV1()->split()` | Разделить заказ на отправления без сборки |
| `POST /v1/posting/fbs/timeslot/change-restrictions` | `postingFbsV1()->timeslotChangeRestrictions()` | Доступные даты для переноса доставки |
| `POST /v1/posting/fbs/timeslot/set` | `postingFbsV1()->timeslotSet()` | Перенести дату доставки |
| `POST /v1/posting/fbs/traceable/split` | `postingFbsV1()->traceableSplit()` | Разделить отправление с прослеживаемыми товарами |
| `POST /v1/posting/global/etgb` | `postingFbsV1()->globalEtgb()` | Таможенные декларации ETGB |
| `POST /v1/posting/marks` | `postingV1()->marks()` | Получить маркировки экземпляров из отправления |
| `POST /v1/posting/unpaid-legal/product/list` | `postingV1()->unpaidLegalProductList()` | Список неоплаченных товаров, заказанных юридическими лицами |
| `POST /v1/pricing-strategy/competitors/list` | `pricingStrategyV1()->competitorsList()` | Список конкурентов |
| `POST /v1/pricing-strategy/create` | `pricingStrategyV1()->create()` | Создать стратегию |
| `POST /v1/pricing-strategy/delete` | `pricingStrategyV1()->delete()` | Удалить стратегию |
| `POST /v1/pricing-strategy/info` | `pricingStrategyV1()->info()` | Информация о стратегии |
| `POST /v1/pricing-strategy/list` | `pricingStrategyV1()->list()` | Список стратегий |
| `POST /v1/pricing-strategy/product/info` | `pricingStrategyV1()->productInfo()` | Цена товара у конкурента |
| `POST /v1/pricing-strategy/products/add` | `pricingStrategyV1()->productsAdd()` | Добавить товары в стратегию |
| `POST /v1/pricing-strategy/products/delete` | `pricingStrategyV1()->productsDelete()` | Удалить товары из стратегии |
| `POST /v1/pricing-strategy/products/list` | `pricingStrategyV1()->productsList()` | Список товаров в стратегии |
| `POST /v1/pricing-strategy/status` | `pricingStrategyV1()->status()` | Изменить статус стратегии |
| `POST /v1/pricing-strategy/strategy-ids-by-product-ids` | `pricingStrategyV1()->strategyIdsByProductIds()` | Список идентификаторов стратегий |
| `POST /v1/pricing-strategy/update` | `pricingStrategyV1()->update()` | Обновить стратегию |
| `POST /v1/product/action/timer/status` | `productV1()->actionTimerStatus()` | Получить статус установленного таймера |
| `POST /v1/product/action/timer/update` | `productV1()->actionTimerUpdate()` | Обновление таймера актуальности минимальной цены |
| `POST /v1/product/archive` | `productV1()->archive()` | Перенести товар в архив |
| `POST /v1/product/attributes/update` | `productV1()->attributesUpdate()` | Обновить характеристики товара |
| `POST /v1/product/certificate/bind` | `productCertificateV1()->bind()` | Привязать сертификат к товару |
| `POST /v1/product/certificate/create` | `productCertificateV1()->create()` | Добавить сертификаты для товаров |
| `POST /v1/product/certificate/delete` | `productCertificateV1()->delete()` | Удалить сертификат |
| `POST /v1/product/certificate/info` | `productCertificateV1()->info()` | Информация о сертификате |
| `POST /v1/product/certificate/list` | `productCertificateV1()->list()` | Список сертификатов |
| `POST /v1/product/certificate/product_status/list` | `productCertificateV1()->productStatusList()` | Список возможных статусов товаров |
| `POST /v1/product/certificate/products/list` | `productCertificateV1()->productsList()` | Список товаров, привязанных к сертификату |
| `POST /v1/product/certificate/rejection_reasons/list` | `productCertificateV1()->rejectionReasonsList()` | Возможные причины отклонения сертификата |
| `POST /v1/product/certificate/status/list` | `productCertificateV1()->statusList()` | Возможные статусы сертификатов |
| `POST /v1/product/certificate/unbind` | `productCertificateV1()->unbind()` | Отвязать товар от сертификата |
| `POST /v1/product/certification/list` | `productV1()->certificationList()` | Список сертифицируемых категорий |
| `POST /v1/product/digital/stocks/import` | `productV1()->digitalStocksImport()` | Обновить количество цифровых товаров |
| `POST /v1/product/import-by-sku` | `productV1()->importBySku()` | Создать товар по SKU |
| `POST /v1/product/import/info` | `productV1()->importInfo()` | Узнать статус добавления или обновления товара |
| `POST /v1/product/import/prices` | `productV1()->importPrices()` | Обновить цену |
| `POST /v1/product/info/description` | `productV1()->infoDescription()` | Получить описание товара |
| `POST /v1/product/info/discounted` | `productV1()->infoDiscounted()` | Узнать информацию об уценке и основном товаре по SKU уценённого товара |
| `POST /v1/product/info/stocks-by-warehouse/fbo` | `productV1()->infoStocksByWarehouseFbo()` | Получить информацию о стоках на складах FBO |
| `POST /v1/product/info/stocks-by-warehouse/fbs` | `productV1()->infoStocksByWarehouseFbs()` | Информация об остатках на складах продавца (FBS и rFBS) |
| `POST /v1/product/info/subscription` | `productV1()->infoSubscription()` | Количество подписавшихся на товар пользователей |
| `POST /v1/product/info/warehouse/stocks` | `productV1()->infoWarehouseStocks()` | Получить информацию по остаткам на складе FBS и rFBS |
| `POST /v1/product/info/wrong-volume` | `productV1()->infoWrongVolume()` | Список товаров с некорректными ОВХ |
| `POST /v1/product/pictures/import` | `productV1()->picturesImport()` | Загрузить или обновить изображения товара |
| `POST /v1/product/placement-zone/info` | `productV1()->placementZoneInfo()` | Получить зоны размещения товаров по SKU перед поставкой |
| `POST /v1/product/prices/details` | `productV1()->pricesDetails()` | Получить подробную информацию о ценах товаров |
| `POST /v1/product/rating-by-sku` | `productV1()->ratingBySku()` | Получить контент-рейтинг товаров по SKU |
| `POST /v1/product/related-sku/get` | `productV1()->relatedSkuGet()` | Получить связанные SKU |
| `POST /v1/product/stairway-discount/by-quantity/get` | `productV1()->stairwayDiscountByQuantityGet()` | Получить информацию о скидке от количества |
| `POST /v1/product/stairway-discount/by-quantity/set` | `productV1()->stairwayDiscountByQuantitySet()` | Управлять скидкой от количества |
| `POST /v1/product/unarchive` | `productV1()->unarchive()` | Вернуть товар из архива |
| `POST /v1/product/update/discount` | `productV1()->updateDiscount()` | Установить скидку на уценённый товар |
| `POST /v1/product/update/offer-id` | `productV1()->updateOfferId()` | Изменить артикулы товаров из системы продавца |
| `POST /v1/product/visibility/info` | `productV1()->visibilityInfo()` | Получить информацию о видимости товара |
| `POST /v1/product/visibility/set` | `productV1()->visibilitySet()` | Настроить видимость товара на витрине Ozon и Ozon Селект |
| `POST /v1/question/answer/create` | `questionV1()->answerCreate()` | Создать ответ на вопрос |
| `POST /v1/question/answer/delete` | `questionV1()->answerDelete()` | Удалить ответ на вопрос |
| `POST /v1/question/answer/list` | `questionV1()->answerList()` | Список ответов на вопрос |
| `POST /v1/question/change-status` | `questionV1()->changeStatus()` | Изменить статус вопросов |
| `POST /v1/question/count` | `questionV1()->count()` | Количество вопросов по статусам |
| `POST /v1/question/info` | `questionV1()->info()` | Информация о вопросе |
| `POST /v1/question/list` | `questionV1()->list()` | Список вопросов |
| `POST /v1/question/top-sku` | `questionV1()->topSku()` | Товары с наибольшим количеством вопросов |
| `POST /v1/rating/history` | `ratingV1()->history()` | Получить информацию о рейтингах продавца за период |
| `POST /v1/rating/index/fbs/info` | `ratingV1()->indexFbsInfo()` | Получить индекс ошибок FBS и rFBS |
| `POST /v1/rating/index/fbs/posting/list` | `postingFbsV1()->ratingIndexPostingList()` | Список отправлений, которые повлияли на индекс ошибок FBS и rFBS |
| `POST /v1/rating/summary` | `ratingV1()->summary()` | Получить информацию о текущих рейтингах продавца |
| `POST /v1/receipts/get` | `receiptsV1()->get()` | Получить чек в формате PDF |
| `POST /v1/receipts/seller/list` | `receiptsV1()->sellerList()` | Получить список чеков продавца |
| `POST /v1/receipts/upload` | `receiptsV1()->upload()` | Загрузить чек |
| `POST /v1/removal/from-stock/list` | `removalV1()->fromStockList()` | Отчёт по вывозу и утилизации со стока FBO |
| `POST /v1/removal/from-supply/list` | `removalV1()->fromSupplyList()` | Отчёт по вывозу и утилизации с поставки FBO |
| `POST /v1/report/discounted/create` | `reportV1()->discountedCreate()` | Отчёт об уценённых товарах |
| `POST /v1/report/info` | `reportV1()->info()` | Информация об отчёте |
| `POST /v1/report/list` | `reportV1()->list()` | Список отчётов |
| `POST /v1/report/marked-products-sales/create` | `reportV1()->markedProductsSalesCreate()` | Сгенерировать отчёт по продажам товаров с маркировкой |
| `POST /v1/report/placement/by-products/create` | `reportV1()->placementByProductsCreate()` | Получить отчёт о стоимости размещения по товарам |
| `POST /v1/report/placement/by-supplies/create` | `reportV1()->placementBySuppliesCreate()` | Получить отчёт о стоимости размещения по поставкам |
| `POST /v1/report/postings/create` | `reportV1()->postingsCreate()` | Отчёт об отправлениях |
| `POST /v1/report/products/create` | `reportV1()->productsCreate()` | Отчёт по товарам |
| `POST /v1/report/realization/posting/create` | `reportV1()->realizationPostingCreate()` | Получить позаказный отчёт о реализации товаров |
| `POST /v1/report/warehouse/stock` | `reportV1()->warehouseStock()` | Отчёт об остатках на FBS-складе |
| `POST /v1/return/giveout/barcode` | `returnsV1()->giveoutBarcode()` | Значение штрихкода для возвратных отгрузок |
| `POST /v1/return/giveout/barcode-reset` | `returnsV1()->giveoutBarcodeReset()` | Сгенерировать новый штрихкод |
| `POST /v1/return/giveout/get-pdf` | `returnsV1()->giveoutGetPdf()` | Штрихкод для получения возвратной отгрузки в формате PDF |
| `POST /v1/return/giveout/get-png` | `returnsV1()->giveoutGetPng()` | Штрихкод для получения возвратной отгрузки в формате PNG |
| `POST /v1/return/giveout/info` | `returnsV1()->giveoutInfo()` | Информация о возвратной отгрузке |
| `POST /v1/return/giveout/is-enabled` | `returnsV1()->giveoutIsEnabled()` | Проверить возможность получения возвратных отгрузок по штрихкоду |
| `POST /v1/return/giveout/list` | `returnsV1()->giveoutList()` | Список возвратных отгрузок |
| `POST /v1/return/pass/create` | `returnsV1()->passCreate()` | Создать пропуск для возврата |
| `POST /v1/return/pass/delete` | `returnsV1()->passDelete()` | Удалить пропуск для возврата |
| `POST /v1/return/pass/update` | `returnsV1()->passUpdate()` | Обновить пропуск для возврата |
| `POST /v1/returns/company/fbs/info` | `returnsV1()->companyFbsInfo()` | Количество возвратов FBS |
| `POST /v1/returns/list` | `returnsV1()->list()` | Информация о возвратах FBO и FBS |
| `POST /v1/returns/rfbs/action/set` | `returnsV1()->rfbsActionSet()` | Передать доступные действия для rFBS возвратов |
| `POST /v1/returns/settings/utilization/history` | `returnsV1()->settingsUtilizationHistory()` | Получить историю изменений автоутилизации |
| `POST /v1/returns/settings/utilization/info` | `returnsV1()->settingsUtilizationInfo()` | Получить настройки автоутилизации |
| `POST /v1/returns/settings/utilization/update` | `returnsV1()->settingsUtilizationUpdate()` | Обновить настройки автоутилизации |
| `POST /v1/review/change-status` | `reviewV1()->changeStatus()` | Изменить статус отзывов |
| `POST /v1/review/comment/create` | `reviewV1()->commentCreate()` | Оставить комментарий на отзыв |
| `POST /v1/review/comment/delete` | `reviewV1()->commentDelete()` | Удалить комментарий на отзыв |
| `POST /v1/review/comment/list` | `reviewV1()->commentList()` | Получить список комментариев на отзыв |
| `POST /v1/review/count` | `reviewV1()->count()` | Количество отзывов по статусам |
| `POST /v1/review/info` | `reviewV1()->info()` | Получить информацию об отзыве |
| `POST /v1/review/list` | `reviewV1()->list()` | Получить список отзывов |
| `POST /v1/roles` | `rolesV1()->list()` | Получить список ролей и методов по API-ключу |
| `POST /v1/search-queries/text` | `searchQueriesV1()->text()` | Получить список поисковых запросов по тексту |
| `POST /v1/search-queries/top` | `searchQueriesV1()->top()` | Получить список популярных поисковых запросов |
| `POST /v1/seller-actions/archive` | `sellerActionsV1()->archive()` | Перенести акцию в архив |
| `POST /v1/seller-actions/change-activity` | `sellerActionsV1()->changeActivity()` | Включить или выключить акцию |
| `POST /v1/seller-actions/create/discount` | `sellerActionsV1()->createDiscount()` | Создать акцию с механикой «Скидка» |
| `POST /v1/seller-actions/create/discount-with-condition` | `sellerActionsV1()->createDiscountWithCondition()` | Создать акцию с механикой «Скидка от суммы заказа» |
| `POST /v1/seller-actions/create/installment` | `sellerActionsV1()->createInstallment()` | Создать акцию с механикой «Беспроцентная рассрочка» |
| `POST /v1/seller-actions/create/multi-level-discount` | `sellerActionsV1()->createMultiLevelDiscount()` | Создать акцию с механикой «Многоуровневая скидка от суммы» |
| `POST /v1/seller-actions/create/voucher` | `sellerActionsV1()->createVoucher()` | Создать акцию с механикой «Скидка по промокоду» |
| `POST /v1/seller-actions/list` | `sellerActionsV1()->list()` | Получить список акций |
| `POST /v1/seller-actions/products/add` | `sellerActionsV1()->productsAdd()` | Добавить товары в акцию |
| `POST /v1/seller-actions/products/candidates` | `sellerActionsV1()->productsCandidates()` | Получить список доступных для акции товаров |
| `POST /v1/seller-actions/products/delete` | `sellerActionsV1()->productsDelete()` | Удалить товары из акции |
| `POST /v1/seller-actions/products/list` | `sellerActionsV1()->productsList()` | Получить список участвующих в акции товаров |
| `POST /v1/seller-actions/update/discount` | `sellerActionsV1()->updateDiscount()` | Обновить акцию с механикой «Скидка» |
| `POST /v1/seller-actions/update/discount-with-condition` | `sellerActionsV1()->updateDiscountWithCondition()` | Обновить акцию с механикой «Скидка от суммы заказа» |
| `POST /v1/seller-actions/update/installment` | `sellerActionsV1()->updateInstallment()` | Обновить акцию с механикой «Беспроцентная рассрочка» |
| `POST /v1/seller-actions/update/multi-level-discount` | `sellerActionsV1()->updateMultiLevelDiscount()` | Обновить акцию с механикой «Многоуровневая скидка от суммы» |
| `POST /v1/seller-actions/update/voucher` | `sellerActionsV1()->updateVoucher()` | Обновить акцию с механикой «Скидка по промокоду» |
| `POST /v1/seller-actions/voucher/get` | `sellerActionsV1()->voucherGet()` | Получить файл с промокодами в формате CSV |
| `POST /v1/seller/info` | `sellerV1()->info()` | Информация о кабинете продавца |
| `POST /v1/seller/ozon-logistics/info` | `sellerV1()->ozonLogisticsInfo()` | Информация о подключении Ozon Доставки |
| `POST /v1/supply-order/act/accept` | `supplyOrderV1()->actAccept()` | Согласовать акт |
| `POST /v1/supply-order/act/accept/status` | `supplyOrderV1()->actAcceptStatus()` | Получить статус согласования акта |
| `POST /v1/supply-order/act/product/get` | `supplyOrderV1()->actProductGet()` | Получить информацию о товарах в акте |
| `POST /v1/supply-order/act/summary/get` | `supplyOrderV1()->actSummaryGet()` | Получить информацию об акте |
| `POST /v1/supply-order/bundle` | `supplyOrderV1()->bundle()` | Состав поставки или заявки на поставку |
| `POST /v1/supply-order/cancel` | `supplyOrderV1()->cancel()` | Отменить заявку на поставку |
| `POST /v1/supply-order/cancel/status` | `supplyOrderV1()->cancelStatus()` | Получить статус отмены заявки на поставку |
| `POST /v1/supply-order/content/update` | `supplyOrderV1()->contentUpdate()` | Редактирование товарного состава |
| `POST /v1/supply-order/content/update/status` | `supplyOrderV1()->contentUpdateStatus()` | Информация о статусе редактирования товарного состава |
| `POST /v1/supply-order/content/update/validation` | `supplyOrderV1()->contentUpdateValidation()` | Проверить новый товарный состав |
| `POST /v1/supply-order/details` | `supplyOrderV1()->details()` | Получить подробную информацию о заявке на поставку |
| `POST /v1/supply-order/pass/create` | `supplyOrderV1()->passCreate()` | Указать данные о водителе и автомобиле |
| `POST /v1/supply-order/pass/status` | `supplyOrderV1()->passStatus()` | Статус ввода данных о водителе и автомобиле |
| `POST /v1/supply-order/status/counter` | `supplyOrderV1()->statusCounter()` | Количество заявок по статусам |
| `POST /v1/supply-order/timeslot/get` | `supplyOrderV1()->timeslotGet()` | Интервалы поставки |
| `POST /v1/supply-order/timeslot/status` | `supplyOrderV1()->timeslotStatus()` | Статус интервала поставки |
| `POST /v1/supply-order/timeslot/update` | `supplyOrderV1()->timeslotUpdate()` | Обновить интервал поставки |
| `POST /v1/warehouse/archive` | `warehouseV1()->archive()` | Перенести склад в архив |
| `POST /v1/warehouse/erfbs/aggregator/create` | `warehouseV1()->erfbsAggregatorCreate()` | Создать склад с методом доставки «Партнёры Ozon» |
| `POST /v1/warehouse/erfbs/aggregator/delivery-method/update` | `warehouseV1()->erfbsAggregatorDeliveryMethodUpdate()` | Обновить метод доставки «Партнёры Ozon» |
| `POST /v1/warehouse/erfbs/non-integrated/create` | `warehouseV1()->erfbsNonIntegratedCreate()` | Создать склад с методом доставки «Вы или сторонняя служба» |
| `POST /v1/warehouse/erfbs/non-integrated/delivery-method/update` | `warehouseV1()->erfbsNonIntegratedDeliveryMethodUpdate()` | Обновить метод доставки «Вы или сторонняя служба» |
| `POST /v1/warehouse/erfbs/update` | `warehouseV1()->erfbsUpdate()` | Обновить склад |
| `POST /v1/warehouse/fbo/list` | `warehouseV1()->fboList()` | Поиск точек для отгрузки поставки |
| `POST /v1/warehouse/fbo/seller/list` | `warehouseV1()->fboSellerList()` | Получить список складов продавца |
| `POST /v1/warehouse/fbs/create` | `warehouseV1()->fbsCreate()` | Создать склад |
| `POST /v1/warehouse/fbs/create/drop-off/list` | `warehouseV1()->fbsCreateDropOffList()` | Получить список drop-off пунктов для создания склада |
| `POST /v1/warehouse/fbs/create/drop-off/timeslot/list` | `warehouseV1()->fbsCreateDropOffTimeslotList()` | Получить список таймслотов для создания склада с отгрузкой drop-off |
| `POST /v1/warehouse/fbs/create/pick-up/timeslot/list` | `warehouseV1()->fbsCreatePickUpTimeslotList()` | Получить список таймслотов для создания склада с отгрузкой pick-up |
| `POST /v1/warehouse/fbs/create/return-point/list` | `warehouseV1()->fbsCreateReturnPointList()` | Получить список пунктов возврата для создания склада |
| `POST /v1/warehouse/fbs/first-mile/update` | `warehouseV1()->fbsFirstMileUpdate()` | Обновить первую милю |
| `POST /v1/warehouse/fbs/pickup/courier/cancel` | `warehouseV1()->fbsPickupCourierCancel()` | Отменить вызов курьера на забор отгрузки pick-up |
| `POST /v1/warehouse/fbs/pickup/courier/create` | `warehouseV1()->fbsPickupCourierCreate()` | Создать вызов курьера на забор отгрузки pick-up |
| `POST /v1/warehouse/fbs/pickup/history/list` | `warehouseV1()->fbsPickupHistoryList()` | Получить историю отгрузок курьерам |
| `POST /v1/warehouse/fbs/pickup/planning/list` | `warehouseV1()->fbsPickupPlanningList()` | Получить список складов для планирования отгрузок курьеру |
| `POST /v1/warehouse/fbs/return-mile/check` | `warehouseV1()->fbsReturnMileCheck()` | Проверить необходимость установки возвратной мили на склад |
| `POST /v1/warehouse/fbs/return-mile/info` | `warehouseV1()->fbsReturnMileInfo()` | Получить информацию о возвратной миле |
| `POST /v1/warehouse/fbs/update` | `warehouseV1()->fbsUpdate()` | Обновить склад |
| `POST /v1/warehouse/fbs/update/drop-off/list` | `warehouseV1()->fbsUpdateDropOffList()` | Получить список drop-off пунктов для изменения информации склада |
| `POST /v1/warehouse/fbs/update/drop-off/timeslot/list` | `warehouseV1()->fbsUpdateDropOffTimeslotList()` | Получить список таймслотов для обновления склада с отгрузкой drop-off |
| `POST /v1/warehouse/fbs/update/pick-up/timeslot/list` | `warehouseV1()->fbsUpdatePickUpTimeslotList()` | Получить список таймслотов для обновления склада с отгрузкой pick-up |
| `POST /v1/warehouse/fbs/update/return-point/list` | `warehouseV1()->fbsUpdateReturnPointList()` | Получить список пунктов возврата для обновления склада |
| `POST /v1/warehouse/invalid-products/get` | `warehouseV1()->invalidProductsGet()` | Получить список товаров с ограничениями по доставке |
| `POST /v1/warehouse/list` | `warehouseV1()->list()` | Список складов |
| `POST /v1/warehouse/operation/status` | `warehouseV1()->operationStatus()` | Получить статус операции |
| `POST /v1/warehouse/ozon/list` | `warehouseV1()->ozonList()` | Получить список складов Ozon |
| `POST /v1/warehouse/rfbs/pause` | `warehouseV1()->rfbsPause()` | Поставить rFBS-склад на паузу |
| `POST /v1/warehouse/rfbs/unpause` | `warehouseV1()->rfbsUnpause()` | Снять rFBS-склад с паузы |
| `POST /v1/warehouse/unarchive` | `warehouseV1()->unarchive()` | Перенести склад из архива |
| `POST /v1/warehouse/warehouses-with-invalid-products` | `warehouseV1()->warehousesWithInvalidProducts()` | Получить список складов с ограниченными для доставки товарами |
| `POST /v2/actions/discounts-task/list` | `actionsV2()->discountsTaskList()` | Получить список заявок на скидку |
| `POST /v2/analytics/stock_on_warehouses` | `analyticsV2()->stockOnWarehouses()` | Отчёт по остаткам и товарам |
| `POST /v2/cargoes/create/info` | `cargoesV2()->createInfo()` | Получить информацию по установке грузомест |
| `POST /v2/cargoes/delete` | `cargoesV2()->delete()` | Удалить грузоместа и транспортные грузоместа в заявке на поставку |
| `POST /v2/cargoes/delete/status` | `cargoesV2()->deleteStatus()` | Получить информацию о статусе удаления грузомест и транспортных грузомест |
| `POST /v2/cargoes/get` | `cargoesV2()->get()` | Получить информацию о грузоместах |
| `POST /v2/carriage/delivery/list` | `carriageV2()->deliveryList()` | Список методов доставки и отгрузок |
| `POST /v2/chat/read` | `chatV2()->read()` | Отметить сообщения как прочитанные |
| `POST /v2/cluster/list` | `clusterV2()->list()` | Получить информацию о макролокальных кластерах |
| `POST /v2/conditional-cancellation/approve` | `conditionalCancellationV2()->approve()` | Подтвердить заявку на отмену rFBS |
| `POST /v2/conditional-cancellation/list` | `conditionalCancellationV2()->list()` | Получить список заявок на отмену rFBS |
| `POST /v2/conditional-cancellation/reject` | `conditionalCancellationV2()->reject()` | Отклонить заявку на отмену rFBS |
| `POST /v2/delivery-method/list` | `deliveryMethodV2()->list()` | Список методов доставки realFBS-склада |
| `POST /v2/delivery/checkout` | `deliveryV2()->checkout()` | Получить доступные варианты доставки |
| `POST /v2/draft/create/info` | `draftV2()->createInfo()` | Получить информацию о черновике заявки на поставку |
| `POST /v2/draft/supply/create` | `draftV2()->supplyCreate()` | Создать заявку на поставку по черновику |
| `POST /v2/draft/supply/create/status` | `draftV2()->supplyCreateStatus()` | Получить информацию о создании заявки на поставку |
| `POST /v2/draft/timeslot/info` | `draftV2()->timeslotInfo()` | Получить список доступных таймслотов |
| `POST /v2/fbs/posting/delivered` | `postingFbsV2()->delivered()` | Изменить статус на «Доставлено» |
| `POST /v2/fbs/posting/delivering` | `postingFbsV2()->delivering()` | Изменить статус на «Доставляется» |
| `POST /v2/fbs/posting/last-mile` | `postingFbsV2()->lastMile()` | Изменить статус на «Последняя миля» |
| `POST /v2/fbs/posting/tracking-number/set` | `postingFbsV2()->setTrackingNumber()` | Добавить трек-номера |
| `POST /v2/finance/realization` | `financeV2()->realization()` | Отчёт о реализации товаров (версия 2) |
| `POST /v2/invoice/create-or-update` | `invoiceV2()->createOrUpdate()` | Создать или изменить счёт-фактуру |
| `POST /v2/invoice/get` | `invoiceV2()->get()` | Получить информацию о счёте-фактуре |
| `POST /v2/order/create` | `orderV2()->create()` | Создать заказ |
| `POST /v2/polygon/bind` | `polygonV2()->bind()` | Связать метод доставки с полигоном |
| `POST /v2/posting/digital/list` | `postingDigitalV2()->list()` | Получить список отправлений |
| `POST /v2/posting/fbo/get` | `postingFboV2()->get()` | Информация об отправлении |
| `POST /v2/posting/fbo/list` | `postingFboV2()->list()` | Список отправлений |
| `POST /v2/posting/fbs/act/check-status` | `postingFbsV2()->actCheckStatus()` | Статус отгрузки и документов |
| `POST /v2/posting/fbs/act/create` | `postingFbsV2()->actCreate()` | Подтвердить отгрузку и создать документы |
| `POST /v2/posting/fbs/act/get-barcode` | `postingFbsV2()->actGetBarcode()` | Штрихкод для отгрузки отправления |
| `POST /v2/posting/fbs/act/get-barcode/text` | `postingFbsV2()->actGetBarcodeText()` | Значение штрихкода для отгрузки отправления |
| `POST /v2/posting/fbs/act/get-container-labels` | `postingFbsV2()->actGetContainerLabels()` | Этикетки для грузового места |
| `POST /v2/posting/fbs/act/get-pdf` | `postingFbsV2()->actGetPdf()` | Получить PDF c документами |
| `POST /v2/posting/fbs/act/get-postings` | `postingFbsV2()->actGetPostings()` | Список отправлений в акте |
| `POST /v2/posting/fbs/act/list` | `postingFbsV2()->actList()` | Список актов по отгрузкам |
| `POST /v2/posting/fbs/arbitration` | `postingFbsV2()->arbitration()` | Открыть спор по отправлению |
| `POST /v2/posting/fbs/awaiting-delivery` | `postingFbsV2()->awaitingDelivery()` | Передать отправление к отгрузке |
| `POST /v2/posting/fbs/cancel` | `postingFbsV2()->cancel()` | Отменить отправление |
| `POST /v2/posting/fbs/cancel-reason/list` | `postingFbsV2()->cancelReasons()` | Причины отмены отправлений |
| `POST /v2/posting/fbs/digital/act/check-status` | `postingFbsV2()->digitalActCheckStatus()` | Статус формирования накладной |
| `POST /v2/posting/fbs/digital/act/get-pdf` | `postingFbsV2()->digitalActGetPdf()` | Получить лист отгрузки по перевозке |
| `POST /v2/posting/fbs/get-by-barcode` | `postingFbsV2()->getByBarcode()` | Получить информацию об отправлении по штрихкоду |
| `POST /v2/posting/fbs/package-label` | `postingFbsV2()->packageLabel()` | Напечатать этикетку |
| `POST /v2/posting/fbs/package-label/create` | `postingFbsV2()->packageLabelCreate()` | Создать задание на формирование этикеток |
| `POST /v2/posting/fbs/product/cancel` | `postingFbsV2()->productCancel()` | Отменить отправку некоторых товаров в отправлении |
| `POST /v2/posting/fbs/product/country/list` | `postingFbsV2()->productCountryList()` | Список доступных стран-изготовителей |
| `POST /v2/posting/fbs/product/country/set` | `postingFbsV2()->productCountrySet()` | Добавить информацию о стране-изготовителе товара |
| `POST /v2/product/certificate/create` | `productCertificateV2()->create()` | Создать сертификат качества |
| `POST /v2/product/certification/list` | `productV2()->certificationList()` | Список сертифицируемых категорий |
| `POST /v2/product/certification/options` | `productV2()->certificationOptions()` | Получить параметры для создания сертификата качества |
| `POST /v2/product/certification/params` | `productV2()->certificationParams()` | Получить обязательные параметры для создания сертификата качества |
| `POST /v2/product/info/stocks-by-warehouse/fbs` | `productV2()->infoStocksByWarehouseFbs()` | Получить информацию об остатках на складах продавца |
| `POST /v2/product/pictures/import` | `productV2()->picturesImport()` | Загрузить или обновить изображения товара |
| `POST /v2/product/pictures/info` | `productV2()->picturesInfo()` | Получить изображения товаров |
| `POST /v2/products/delete` | `productV2()->delete()` | Удалить товар без SKU из архива |
| `POST /v2/products/stocks` | `productV2()->stocks()` | Обновить количество товаров на складах |
| `POST /v2/report/returns/create` | `reportV2()->returnsCreate()` | Отчёт о возвратах |
| `POST /v2/returns/rfbs/get` | `returnsRfbsV2()->get()` | Информация о заявке на возврат |
| `POST /v2/returns/rfbs/list` | `returnsRfbsV2()->list()` | Список заявок на возврат |
| `POST /v2/review/change-status` | `reviewV2()->changeStatus()` | Изменить статус отзывов |
| `POST /v2/review/comment/delete` | `reviewV2()->commentDelete()` | Удалить комментарий на отзыв |
| `POST /v2/review/count` | `reviewV2()->count()` | Получить количество отзывов по статусам |
| `POST /v2/review/info` | `reviewV2()->info()` | Получить информацию по отзыву |
| `POST /v2/review/list` | `reviewV2()->list()` | Получить список отзывов |
| `POST /v2/supply-order/timeslot/list` | `supplyOrderV2()->timeslotList()` | Получить список доступных интервалов поставки |
| `POST /v2/warehouse/list` | `warehouseV2()->list()` | Список складов |
| `POST /v3/chat/history` | `chatV3()->history()` | История чата |
| `POST /v3/chat/list` | `chatV3()->list()` | Список чатов |
| `POST /v3/finance/transaction/list` | `financeV3()->transactionList()` | Список транзакций |
| `POST /v3/finance/transaction/totals` | `financeV3()->transactionTotals()` | Суммы транзакций |
| `POST /v3/posting/fbo/list` | `postingFboV3()->list()` | Получить список отправлений |
| `POST /v3/posting/fbs/get` | `postingFbsV3()->get()` | Получить информацию об отправлении по идентификатору |
| `POST /v3/posting/fbs/list` | `postingFbsV3()->list()` | Список отправлений |
| `POST /v3/posting/fbs/unfulfilled/list` | `postingFbsV3()->unfulfilledList()` | Список необработанных отправлений |
| `POST /v3/posting/multiboxqty/set` | `postingFbsV3()->setMultiBoxQty()` | Указать количество коробок для многокоробочных отправлений |
| `POST /v3/product/import` | `productV3()->import()` | Создать или обновить товар |
| `POST /v3/product/info/list` | `productV3()->infoList()` | Получить информацию о товарах по идентификаторам |
| `POST /v3/product/list` | `productV3()->list()` | Список товаров |
| `POST /v3/supply-order/get` | `supplyOrderV3()->get()` | Информация о заявке на поставку |
| `POST /v3/supply-order/list` | `supplyOrderV3()->list()` | Список заявок на поставку на склад Ozon |
| `POST /v4/posting/fbs/list` | `postingFbsV4()->list()` | Получить список отправлений |
| `POST /v4/posting/fbs/ship` | `postingFbsV4()->ship()` | Собрать заказ (версия 4) |
| `POST /v4/posting/fbs/ship/package` | `postingFbsV4()->shipPackage()` | Частичная сборка отправления (версия 4) |
| `POST /v4/posting/fbs/unfulfilled/list` | `postingFbsV4()->unfulfilledList()` | Получить список необработанных отправлений |
| `POST /v4/product/info/attributes` | `productV4()->infoAttributes()` | Получить описание характеристик товара |
| `POST /v4/product/info/limit` | `productV4()->infoLimit()` | Лимиты на ассортимент, создание и обновление товаров |
| `POST /v4/product/info/stocks` | `productV4()->infoStocks()` | Информация о количестве товаров |
| `POST /v5/fbs/posting/product/exemplar/status` | `postingFbsV5()->productExemplarStatus()` | Получить статус добавления экземпляров |
| `POST /v5/fbs/posting/product/exemplar/validate` | `postingFbsV5()->productExemplarValidate()` | Валидация кодов маркировки |
| `POST /v5/product/info/prices` | `productV5()->infoPrices()` | Получить информацию о цене товара |
| `POST /v6/fbs/posting/product/exemplar/create-or-get` | `postingFbsV6()->productExemplarCreateOrGet()` | Получить данные созданных экземпляров |
| `POST /v6/fbs/posting/product/exemplar/set` | `postingFbsV6()->productExemplarSet()` | Проверить и сохранить данные экземпляров |
