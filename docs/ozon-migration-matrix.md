# Ozon API Migration Matrix

Last updated: 2026-04-13

## Source baseline
Canonical source for migration is local swagger snapshot:
- [`docs/swagger.json`](swagger.json)

Official references:
- `https://docs.ozon.ru/api/seller/`
- `https://docs.ozon.ru/api/seller/swagger.json`

Note:
- In this environment official docs are blocked by anti-bot, so all planning is based on the downloaded local swagger file.

## Swagger snapshot
- OpenAPI: `3.0.0`
- API title: `Документация Ozon Seller API`
- Spec version: `2.1`
- Paths/operations: `422`
- Tags: `68`
- Version split:
- `v1: 337`
- `v2: 62`
- `v3: 13`
- `v4: 5`
- `v5: 3`
- `v6: 2`
- Typed wrappers matched with snapshot endpoints: `421`
- Remaining endpoints without typed wrapper: `1`

Coverage note:
- The numeric counter is built from explicit route wrappers (`->vN(...)->get/post/...('/path')`).
- Endpoints wrapped via helper indirection and templated paths may require manual verification in checklists/tests.
- Current remaining counter item is templated: `GET /v1/cargoes-label/file/{file_guid}` (runtime wrapper: `cargoesLabelV1()->file($fileGuid)`).

## Status legend
- `done`: dedicated typed wrapper exists.
- `todo`: no dedicated wrapper yet.
- `verify`: path/behavior must be rechecked against latest official docs before release.

## Migration waves
| Wave | Scope | Size from swagger | Done when |
|---|---|---|---|
| W0 | Inventory freeze | 422 ops | Matrix is mapped to classes and priorities |
| W1 | FBS/rFBS core and shipping | 50 ops | All FBS rows are `done` or `deprecated` |
| W2 | FBO and supply orders | 19 ops | All FBO/supply rows are `done` |
| W3 | Products, categories, prices, stocks | large (non-exclusive groups 87 + 48) | Product/catalog/stock rows are `done` |
| W4 | Promotions, pricing strategy, certificates, warehouses | medium | Commercial/logistics setup rows are `done` |
| W5 | Returns, cancellations, chats, invoices | 45 ops | Operational support rows are `done` |
| W6 | Reports, analytics, finance, rating | 37 ops | Backoffice rows are `done` |
| W7 | Hardening | n/a | docs + examples + tests complete |

## Current implementation map
| Scope | Class | Status |
|---|---|---|
| Generic transport | `PhpSoftBox\Ozon\OzonApiClient` | done |
| Generic version router | `PhpSoftBox\Ozon\OzonApiVersion` | done |
| Assembly FBS v1 | `PhpSoftBox\Ozon\V1\AssemblyFbsV1` | done |
| Posting FBS v1 | `PhpSoftBox\Ozon\V1\PostingFbsV1` | done |
| Posting FBO v1 | `PhpSoftBox\Ozon\V1\PostingFboV1` | done |
| Supplier v1 | `PhpSoftBox\Ozon\V1\SupplierV1` | done |
| Supply order v1 | `PhpSoftBox\Ozon\V1\SupplyOrderV1` | done |
| Product v1 | `PhpSoftBox\Ozon\V1\ProductV1` | partial |
| Product v2 | `PhpSoftBox\Ozon\V2\ProductV2` | partial |
| Product v3 | `PhpSoftBox\Ozon\V3\ProductV3` | partial |
| Product v4 | `PhpSoftBox\Ozon\V4\ProductV4` | partial |
| Product v5 | `PhpSoftBox\Ozon\V5\ProductV5` | partial |
| Barcode v1 | `PhpSoftBox\Ozon\V1\BarcodeV1` | done |
| Description category v1 | `PhpSoftBox\Ozon\V1\DescriptionCategoryV1` | done |
| Actions v1 | `PhpSoftBox\Ozon\V1\ActionsV1` | done |
| Actions v2 | `PhpSoftBox\Ozon\V2\ActionsV2` | done |
| Seller actions v1 | `PhpSoftBox\Ozon\V1\SellerActionsV1` | done |
| Pricing strategy v1 | `PhpSoftBox\Ozon\V1\PricingStrategyV1` | done |
| Delivery method v1 | `PhpSoftBox\Ozon\V1\DeliveryMethodV1` | done |
| Delivery method v2 | `PhpSoftBox\Ozon\V2\DeliveryMethodV2` | done |
| Warehouse v1 | `PhpSoftBox\Ozon\V1\WarehouseV1` | done |
| Warehouse v2 | `PhpSoftBox\Ozon\V2\WarehouseV2` | done |
| Brand v1 | `PhpSoftBox\Ozon\V1\BrandV1` | done |
| Product certificate v1 | `PhpSoftBox\Ozon\V1\ProductCertificateV1` | done |
| Product certificate v2 | `PhpSoftBox\Ozon\V2\ProductCertificateV2` | done |
| Cancel reason v1 | `PhpSoftBox\Ozon\V1\CancelReasonV1` | done |
| Order cancellation v1 | `PhpSoftBox\Ozon\V1\OrderV1` | done |
| Posting cancellation v1 | `PhpSoftBox\Ozon\V1\PostingV1` | done |
| Returns v1 | `PhpSoftBox\Ozon\V1\ReturnsV1` | done |
| Returns rFBS v2 | `PhpSoftBox\Ozon\V2\ReturnsRfbsV2` | done |
| Conditional cancellation v2 | `PhpSoftBox\Ozon\V2\ConditionalCancellationV2` | done |
| Chat v1 | `PhpSoftBox\Ozon\V1\ChatV1` | done |
| Chat v2 | `PhpSoftBox\Ozon\V2\ChatV2` | done |
| Chat v3 | `PhpSoftBox\Ozon\V3\ChatV3` | done |
| Invoice v1 | `PhpSoftBox\Ozon\V1\InvoiceV1` | done |
| Invoice v2 | `PhpSoftBox\Ozon\V2\InvoiceV2` | done |
| Report v1 | `PhpSoftBox\Ozon\V1\ReportV1` | done |
| Report v2 | `PhpSoftBox\Ozon\V2\ReportV2` | done |
| Analytics v1 | `PhpSoftBox\Ozon\V1\AnalyticsV1` | done |
| Analytics v2 | `PhpSoftBox\Ozon\V2\AnalyticsV2` | done |
| Finance v1 | `PhpSoftBox\Ozon\V1\FinanceV1` | done |
| Finance v2 | `PhpSoftBox\Ozon\V2\FinanceV2` | done |
| Finance v3 | `PhpSoftBox\Ozon\V3\FinanceV3` | done |
| Rating v1 | `PhpSoftBox\Ozon\V1\RatingV1` | done |
| Assembly carriage v1 | `PhpSoftBox\Ozon\V1\AssemblyCarriageV1` | done |
| Cargoes label v1 | `PhpSoftBox\Ozon\V1\CargoesLabelV1` | done |
| Cargoes v1 | `PhpSoftBox\Ozon\V1\CargoesV1` | done |
| Carriage v1 | `PhpSoftBox\Ozon\V1\CarriageV1` | done |
| Draft v1 | `PhpSoftBox\Ozon\V1\DraftV1` | done |
| FBP v1 | `PhpSoftBox\Ozon\V1\FbpV1` | done |
| Notification v1 | `PhpSoftBox\Ozon\V1\NotificationV1` | done |
| Question v1 | `PhpSoftBox\Ozon\V1\QuestionV1` | done |
| Review v1 | `PhpSoftBox\Ozon\V1\ReviewV1` | done |
| Receipts v1 | `PhpSoftBox\Ozon\V1\ReceiptsV1` | done |
| Search queries v1 | `PhpSoftBox\Ozon\V1\SearchQueriesV1` | done |
| Seller v1 | `PhpSoftBox\Ozon\V1\SellerV1` | done |
| Roles v1 | `PhpSoftBox\Ozon\V1\RolesV1` | done |
| Cluster v1 | `PhpSoftBox\Ozon\V1\ClusterV1` | done |
| Delivery v1 | `PhpSoftBox\Ozon\V1\DeliveryV1` | done |
| Pass v1 | `PhpSoftBox\Ozon\V1\PassV1` | done |
| Polygon v1 | `PhpSoftBox\Ozon\V1\PolygonV1` | done |
| Removal v1 | `PhpSoftBox\Ozon\V1\RemovalV1` | done |
| Cargoes v2 | `PhpSoftBox\Ozon\V2\CargoesV2` | done |
| Carriage v2 | `PhpSoftBox\Ozon\V2\CarriageV2` | done |
| Draft v2 | `PhpSoftBox\Ozon\V2\DraftV2` | done |
| Cluster v2 | `PhpSoftBox\Ozon\V2\ClusterV2` | done |
| Delivery v2 | `PhpSoftBox\Ozon\V2\DeliveryV2` | done |
| Order v2 | `PhpSoftBox\Ozon\V2\OrderV2` | done |
| Polygon v2 | `PhpSoftBox\Ozon\V2\PolygonV2` | done |
| Posting FBO v2 | `PhpSoftBox\Ozon\V2\PostingFboV2` | done |
| Posting FBS v2 | `PhpSoftBox\Ozon\V2\PostingFbsV2` | done |
| Posting FBS v3 | `PhpSoftBox\Ozon\V3\PostingFbsV3` | done |
| Supply order v3 | `PhpSoftBox\Ozon\V3\SupplyOrderV3` | done |
| Posting FBS v4 | `PhpSoftBox\Ozon\V4\PostingFbsV4` | done |
| Posting FBS v5 | `PhpSoftBox\Ozon\V5\PostingFbsV5` | done |
| Posting FBS v6 | `PhpSoftBox\Ozon\V6\PostingFbsV6` | done |

## W1 checklist: FBS/rFBS (from swagger)
| Endpoint | Priority | Status | Target class |
|---|---|---|---|
| `POST /v1/assembly/fbs/posting/list` | P2 | done | `V1\AssemblyFbsV1` |
| `POST /v1/assembly/fbs/product/list` | P1 | done | `V1\AssemblyFbsV1` |
| `POST /v1/fbs/posting/product/exemplar/update` | P1 | done | `V1\PostingFbsV1` |
| `POST /v1/posting/carriage-available/list` | P2 | done | `V1\PostingFbsV1` |
| `POST /v1/posting/fbs/cancel-reason` | P2 | done | `V1\PostingFbsV1` |
| `POST /v1/posting/fbs/package-label/create` | P2 | done | `V1\PostingFbsV1` |
| `POST /v1/posting/fbs/package-label/get` | P2 | done | `V1\PostingFbsV1` |
| `POST /v1/posting/fbs/pick-up-code/verify` | P2 | done | `V1\PostingFbsV1` |
| `POST /v1/posting/fbs/product/traceable/attribute` | P1 | done | `V1\PostingFbsV1` |
| `POST /v1/posting/fbs/restrictions` | P2 | done | `V1\PostingFbsV1` |
| `POST /v1/posting/fbs/split` | P2 | done | `V1\PostingFbsV1` |
| `POST /v1/posting/fbs/timeslot/change-restrictions` | P1 | done | `V1\PostingFbsV1` |
| `POST /v1/posting/fbs/timeslot/set` | P1 | done | `V1\PostingFbsV1` |
| `POST /v1/posting/fbs/traceable/split` | P2 | done | `V1\PostingFbsV1` |
| `POST /v1/posting/global/etgb` | P2 | done | `V1\PostingFbsV1` |
| `POST /v1/rating/index/fbs/posting/list` | P2 | done | `V1\PostingFbsV1` |
| `POST /v2/fbs/posting/delivered` | P0 | done | `V2\PostingFbsV2` |
| `POST /v2/fbs/posting/delivering` | P0 | done | `V2\PostingFbsV2` |
| `POST /v2/fbs/posting/last-mile` | P2 | done | `V2\PostingFbsV2` |
| `POST /v2/fbs/posting/tracking-number/set` | P0 | done | `V2\PostingFbsV2` |
| `POST /v2/posting/fbs/act/check-status` | P0 | done | `V2\PostingFbsV2` |
| `POST /v2/posting/fbs/act/create` | P0 | done | `V2\PostingFbsV2` |
| `POST /v2/posting/fbs/act/get-barcode` | P0 | done | `V2\PostingFbsV2` |
| `POST /v2/posting/fbs/act/get-barcode/text` | P1 | done | `V2\PostingFbsV2` |
| `POST /v2/posting/fbs/act/get-container-labels` | P1 | done | `V2\PostingFbsV2` |
| `POST /v2/posting/fbs/act/get-pdf` | P1 | done | `V2\PostingFbsV2` |
| `POST /v2/posting/fbs/act/get-postings` | P0 | done | `V2\PostingFbsV2` |
| `POST /v2/posting/fbs/act/list` | P1 | done | `V2\PostingFbsV2` |
| `POST /v2/posting/fbs/arbitration` | P2 | done | `V2\PostingFbsV2` |
| `POST /v2/posting/fbs/awaiting-delivery` | P2 | done | `V2\PostingFbsV2` |
| `POST /v2/posting/fbs/cancel` | P0 | done | `V2\PostingFbsV2` |
| `POST /v2/posting/fbs/cancel-reason/list` | P2 | done | `V2\PostingFbsV2` |
| `POST /v2/posting/fbs/digital/act/check-status` | P1 | done | `V2\PostingFbsV2` |
| `POST /v2/posting/fbs/digital/act/get-pdf` | P1 | done | `V2\PostingFbsV2` |
| `POST /v2/posting/fbs/get-by-barcode` | P0 | done | `V2\PostingFbsV2` |
| `POST /v2/posting/fbs/package-label` | P0 | done | `V2\PostingFbsV2` |
| `POST /v2/posting/fbs/package-label/create` | P2 | done | `V2\PostingFbsV2` |
| `POST /v2/posting/fbs/product/cancel` | P1 | done | `V2\PostingFbsV2` |
| `POST /v2/posting/fbs/product/country/list` | P1 | done | `V2\PostingFbsV2` |
| `POST /v2/posting/fbs/product/country/set` | P1 | done | `V2\PostingFbsV2` |
| `POST /v3/posting/fbs/get` | P0 | done | `V3\PostingFbsV3` |
| `POST /v3/posting/fbs/list` | P0 | done | `V3\PostingFbsV3` |
| `POST /v3/posting/fbs/unfulfilled/list` | P0 | done | `V3\PostingFbsV3` |
| `POST /v3/posting/multiboxqty/set` | P2 | done | `V3\PostingFbsV3` |
| `POST /v4/posting/fbs/ship` | P0 | done | `V4\PostingFbsV4` |
| `POST /v4/posting/fbs/ship/package` | P0 | done | `V4\PostingFbsV4` |
| `POST /v5/fbs/posting/product/exemplar/status` | P1 | done | `V5\PostingFbsV5` |
| `POST /v5/fbs/posting/product/exemplar/validate` | P1 | done | `V5\PostingFbsV5` |
| `POST /v6/fbs/posting/product/exemplar/create-or-get` | P1 | done | `V6\PostingFbsV6` |
| `POST /v6/fbs/posting/product/exemplar/set` | P1 | done | `V6\PostingFbsV6` |

## W2 checklist: FBO/supply (from swagger)
| Endpoint | Priority | Status | Target class |
|---|---|---|---|
| `POST /v1/posting/fbo/cancel-reason/list` | P2 | done | `V1\PostingFboV1` |
| `GET /v1/supplier/available_warehouses` | P2 | done | `V1\SupplierV1` |
| `POST /v1/supply-order/bundle` | P1 | done | `V1\SupplyOrderV1` |
| `POST /v1/supply-order/cancel` | P1 | done | `V1\SupplyOrderV1` |
| `POST /v1/supply-order/cancel/status` | P1 | done | `V1\SupplyOrderV1` |
| `POST /v1/supply-order/content/update` | P1 | done | `V1\SupplyOrderV1` |
| `POST /v1/supply-order/content/update/status` | P1 | done | `V1\SupplyOrderV1` |
| `POST /v1/supply-order/content/update/validation` | P1 | done | `V1\SupplyOrderV1` |
| `POST /v1/supply-order/details` | P1 | done | `V1\SupplyOrderV1` |
| `POST /v1/supply-order/pass/create` | P1 | done | `V1\SupplyOrderV1` |
| `POST /v1/supply-order/pass/status` | P1 | done | `V1\SupplyOrderV1` |
| `POST /v1/supply-order/status/counter` | P1 | done | `V1\SupplyOrderV1` |
| `POST /v1/supply-order/timeslot/get` | P1 | done | `V1\SupplyOrderV1` |
| `POST /v1/supply-order/timeslot/status` | P1 | done | `V1\SupplyOrderV1` |
| `POST /v1/supply-order/timeslot/update` | P1 | done | `V1\SupplyOrderV1` |
| `POST /v2/posting/fbo/get` | P0 | done | `V2\PostingFboV2` |
| `POST /v2/posting/fbo/list` | P0 | done | `V2\PostingFboV2` |
| `POST /v3/supply-order/get` | P0 | done | `V3\SupplyOrderV3` |
| `POST /v3/supply-order/list` | P0 | done | `V3\SupplyOrderV3` |

## W3.1 checklist: Product core (from swagger)
| Endpoint | Priority | Status | Target class |
|---|---|---|---|
| `POST /v3/product/import` | P0 | done | `V3\ProductV3` |
| `POST /v3/product/info/list` | P0 | done | `V3\ProductV3` |
| `POST /v1/product/import/info` | P1 | done | `V1\ProductV1` |
| `POST /v1/product/import/prices` | P0 | done | `V1\ProductV1` |
| `POST /v2/products/stocks` | P0 | done | `V2\ProductV2` |

## W3.2 checklist: Category/attribute (from swagger)
| Endpoint | Priority | Status | Target class |
|---|---|---|---|
| `POST /v1/description-category/tree` | P0 | done | `V1\DescriptionCategoryV1` |
| `POST /v1/description-category/attribute` | P0 | done | `V1\DescriptionCategoryV1` |
| `POST /v1/description-category/attribute/values` | P0 | done | `V1\DescriptionCategoryV1` |
| `POST /v1/description-category/attribute/values/search` | P1 | done | `V1\DescriptionCategoryV1` |

## W3.3 checklist: Product lifecycle (from swagger)
| Endpoint | Priority | Status | Target class |
|---|---|---|---|
| `POST /v1/product/import-by-sku` | P1 | done | `V1\ProductV1` |
| `POST /v1/product/attributes/update` | P1 | done | `V1\ProductV1` |
| `POST /v1/product/pictures/import` | P1 | done | `V1\ProductV1` |
| `POST /v1/product/archive` | P1 | done | `V1\ProductV1` |
| `POST /v1/product/unarchive` | P1 | done | `V1\ProductV1` |
| `POST /v2/products/delete` | P1 | done | `V2\ProductV2` |
| `POST /v2/product/pictures/info` | P1 | done | `V2\ProductV2` |

## W3.4 checklist: Product support endpoints (from swagger)
| Endpoint | Priority | Status | Target class |
|---|---|---|---|
| `POST /v1/product/info/discounted` | P1 | done | `V1\ProductV1` |
| `POST /v1/product/info/stocks-by-warehouse/fbs` | P1 | done | `V1\ProductV1` |
| `POST /v2/product/info/stocks-by-warehouse/fbs` | P1 | done | `V2\ProductV2` |
| `POST /v1/product/prices/details` | P1 | done | `V1\ProductV1` |
| `POST /v1/product/rating-by-sku` | P1 | done | `V1\ProductV1` |

## W4.1 checklist: Ozon promotions (from swagger)
| Endpoint | Priority | Status | Target class |
|---|---|---|---|
| `GET /v1/actions` | P0 | done | `V1\ActionsV1` |
| `POST /v1/actions/candidates` | P0 | done | `V1\ActionsV1` |
| `POST /v1/actions/products` | P0 | done | `V1\ActionsV1` |
| `POST /v1/actions/products/activate` | P0 | done | `V1\ActionsV1` |
| `POST /v1/actions/products/deactivate` | P0 | done | `V1\ActionsV1` |
| `POST /v1/actions/discounts-task/list` | P0 | done | `V1\ActionsV1` |
| `POST /v1/actions/discounts-task/approve` | P0 | done | `V1\ActionsV1` |
| `POST /v1/actions/discounts-task/decline` | P0 | done | `V1\ActionsV1` |
| `POST /v2/actions/discounts-task/list` | P1 | done | `V2\ActionsV2` |

## W4.2 checklist: Seller actions & pricing strategy (from swagger)
| Endpoint | Priority | Status | Target class |
|---|---|---|---|
| `POST /v1/seller-actions/create/discount` | P1 | done | `V1\SellerActionsV1` |
| `POST /v1/seller-actions/create/discount-with-condition` | P1 | done | `V1\SellerActionsV1` |
| `POST /v1/seller-actions/create/installment` | P1 | done | `V1\SellerActionsV1` |
| `POST /v1/seller-actions/create/multi-level-discount` | P1 | done | `V1\SellerActionsV1` |
| `POST /v1/seller-actions/create/ozon-card-discount` | P1 | done | `V1\SellerActionsV1` |
| `POST /v1/seller-actions/create/voucher` | P1 | done | `V1\SellerActionsV1` |
| `POST /v1/seller-actions/update/discount` | P1 | done | `V1\SellerActionsV1` |
| `POST /v1/seller-actions/update/discount-with-condition` | P1 | done | `V1\SellerActionsV1` |
| `POST /v1/seller-actions/update/installment` | P1 | done | `V1\SellerActionsV1` |
| `POST /v1/seller-actions/update/multi-level-discount` | P1 | done | `V1\SellerActionsV1` |
| `POST /v1/seller-actions/update/ozon-card-discount` | P1 | done | `V1\SellerActionsV1` |
| `POST /v1/seller-actions/update/voucher` | P1 | done | `V1\SellerActionsV1` |
| `POST /v1/seller-actions/products/add` | P1 | done | `V1\SellerActionsV1` |
| `POST /v1/seller-actions/products/candidates` | P1 | done | `V1\SellerActionsV1` |
| `POST /v1/seller-actions/products/delete` | P1 | done | `V1\SellerActionsV1` |
| `POST /v1/seller-actions/products/list` | P1 | done | `V1\SellerActionsV1` |
| `POST /v1/seller-actions/archive` | P1 | done | `V1\SellerActionsV1` |
| `POST /v1/seller-actions/change-activity` | P1 | done | `V1\SellerActionsV1` |
| `POST /v1/seller-actions/list` | P1 | done | `V1\SellerActionsV1` |
| `POST /v1/seller-actions/voucher/get` | P1 | done | `V1\SellerActionsV1` |
| `POST /v1/pricing-strategy/competitors/list` | P1 | done | `V1\PricingStrategyV1` |
| `POST /v1/pricing-strategy/list` | P1 | done | `V1\PricingStrategyV1` |
| `POST /v1/pricing-strategy/create` | P1 | done | `V1\PricingStrategyV1` |
| `POST /v1/pricing-strategy/info` | P1 | done | `V1\PricingStrategyV1` |
| `POST /v1/pricing-strategy/update` | P1 | done | `V1\PricingStrategyV1` |
| `POST /v1/pricing-strategy/products/add` | P1 | done | `V1\PricingStrategyV1` |
| `POST /v1/pricing-strategy/strategy-ids-by-product-ids` | P1 | done | `V1\PricingStrategyV1` |
| `POST /v1/pricing-strategy/products/list` | P1 | done | `V1\PricingStrategyV1` |
| `POST /v1/pricing-strategy/product/info` | P1 | done | `V1\PricingStrategyV1` |
| `POST /v1/pricing-strategy/products/delete` | P1 | done | `V1\PricingStrategyV1` |
| `POST /v1/pricing-strategy/status` | P1 | done | `V1\PricingStrategyV1` |
| `POST /v1/pricing-strategy/delete` | P1 | done | `V1\PricingStrategyV1` |

## W4.3 checklist: Warehouses (from swagger)
| Endpoint | Priority | Status | Target class |
|---|---|---|---|
| `POST /v1/warehouse/list` | P1 | done | `V1\WarehouseV1` |
| `POST /v2/warehouse/list` | P1 | done | `V2\WarehouseV2` |
| `POST /v1/warehouse/operation/status` | P1 | done | `V1\WarehouseV1` |
| `POST /v1/warehouse/archive` | P1 | done | `V1\WarehouseV1` |
| `POST /v1/warehouse/unarchive` | P1 | done | `V1\WarehouseV1` |
| `POST /v1/warehouse/invalid-products/get` | P1 | done | `V1\WarehouseV1` |
| `POST /v1/warehouse/warehouses-with-invalid-products` | P1 | done | `V1\WarehouseV1` |
| `POST /v1/warehouse/fbo/list` | P1 | done | `V1\WarehouseV1` |
| `POST /v1/warehouse/fbo/seller/list` | P1 | done | `V1\WarehouseV1` |
| `POST /v1/warehouse/ozon/list` | P1 | done | `V1\WarehouseV1` |
| `POST /v1/warehouse/rfbs/pause` | P1 | done | `V1\WarehouseV1` |
| `POST /v1/warehouse/rfbs/unpause` | P1 | done | `V1\WarehouseV1` |
| `POST /v1/warehouse/fbs/create/drop-off/list` | P1 | done | `V1\WarehouseV1` |
| `POST /v1/warehouse/fbs/update/drop-off/list` | P1 | done | `V1\WarehouseV1` |
| `POST /v1/warehouse/fbs/create/drop-off/timeslot/list` | P1 | done | `V1\WarehouseV1` |
| `POST /v1/warehouse/fbs/update/drop-off/timeslot/list` | P1 | done | `V1\WarehouseV1` |
| `POST /v1/warehouse/fbs/create/pick-up/timeslot/list` | P1 | done | `V1\WarehouseV1` |
| `POST /v1/warehouse/fbs/update/pick-up/timeslot/list` | P1 | done | `V1\WarehouseV1` |
| `POST /v1/warehouse/fbs/create` | P1 | done | `V1\WarehouseV1` |
| `POST /v1/warehouse/fbs/update` | P1 | done | `V1\WarehouseV1` |
| `POST /v1/warehouse/fbs/first-mile/update` | P1 | done | `V1\WarehouseV1` |
| `POST /v1/warehouse/fbs/create/return-point/list` | P1 | done | `V1\WarehouseV1` |
| `POST /v1/warehouse/fbs/update/return-point/list` | P1 | done | `V1\WarehouseV1` |
| `POST /v1/warehouse/fbs/return-mile/info` | P1 | done | `V1\WarehouseV1` |
| `POST /v1/warehouse/fbs/return-mile/check` | P1 | done | `V1\WarehouseV1` |
| `POST /v1/warehouse/fbs/pickup/courier/create` | P1 | done | `V1\WarehouseV1` |
| `POST /v1/warehouse/fbs/pickup/courier/cancel` | P1 | done | `V1\WarehouseV1` |
| `POST /v1/warehouse/fbs/pickup/history/list` | P1 | done | `V1\WarehouseV1` |
| `POST /v1/warehouse/fbs/pickup/planning/list` | P1 | done | `V1\WarehouseV1` |
| `POST /v1/warehouse/erfbs/aggregator/create` | P1 | done | `V1\WarehouseV1` |
| `POST /v1/warehouse/erfbs/update` | P1 | done | `V1\WarehouseV1` |
| `POST /v1/warehouse/erfbs/aggregator/delivery-method/update` | P1 | done | `V1\WarehouseV1` |
| `POST /v1/warehouse/erfbs/non-integrated/create` | P1 | done | `V1\WarehouseV1` |
| `POST /v1/warehouse/erfbs/non-integrated/delivery-method/update` | P1 | done | `V1\WarehouseV1` |

## W4.4 checklist: Delivery methods (from swagger)
| Endpoint | Priority | Status | Target class |
|---|---|---|---|
| `POST /v1/delivery-method/list` | P1 | done | `V1\DeliveryMethodV1` |
| `POST /v1/delivery-method/return/settings/get` | P1 | done | `V1\DeliveryMethodV1` |
| `POST /v2/delivery-method/list` | P1 | done | `V2\DeliveryMethodV2` |

## W4.5 checklist: Certificates & brand (from swagger)
| Endpoint | Priority | Status | Target class |
|---|---|---|---|
| `POST /v1/brand/company-certification/list` | P1 | done | `V1\BrandV1` |
| `GET /v1/product/certificate/accordance-types` | P1 | done | `V1\ProductCertificateV1` |
| `GET /v2/product/certificate/accordance-types/list` | P1 | done | `V2\ProductCertificateV2` |
| `GET /v1/product/certificate/types` | P1 | done | `V1\ProductCertificateV1` |
| `POST /v1/product/certificate/create` | P1 | done | `V1\ProductCertificateV1` |
| `POST /v1/product/certificate/bind` | P1 | done | `V1\ProductCertificateV1` |
| `POST /v1/product/certificate/delete` | P1 | done | `V1\ProductCertificateV1` |
| `POST /v1/product/certificate/info` | P1 | done | `V1\ProductCertificateV1` |
| `POST /v1/product/certificate/list` | P1 | done | `V1\ProductCertificateV1` |
| `POST /v1/product/certificate/product_status/list` | P1 | done | `V1\ProductCertificateV1` |
| `POST /v1/product/certificate/products/list` | P1 | done | `V1\ProductCertificateV1` |
| `POST /v1/product/certificate/unbind` | P1 | done | `V1\ProductCertificateV1` |
| `POST /v1/product/certificate/rejection_reasons/list` | P1 | done | `V1\ProductCertificateV1` |
| `POST /v1/product/certificate/status/list` | P1 | done | `V1\ProductCertificateV1` |

## Remaining waves (domain backlog)
| Domain | Swagger footprint | Wave | Status |
|---|---|---|---|
| Products/Categories/Attributes | 87 (non-exclusive) | W3 | partial |
| Prices/Stocks/Warehouses | 48 (non-exclusive) | W3/W4 | partial |
| Promotions/Pricing Strategy | 21 | W4 | done |
| Certificates/Brand/Supplier setup | tag-driven | W4 | done |
| Returns/Cancellations | 45 (domain slice) | W5 | done |
| Reports/Analytics/Finance/Rating | 37 (domain slice) | W6 | done |
| Remaining uncovered endpoints | 1 (templated path) | W7+ | verify |

## Execution rules
1. One domain per PR.
2. Every endpoint wrapper must include:
- payload validation/filtering;
- test for route and payload;
- README snippet when first method in class is added.
3. Matrix status is updated in the same PR.
4. If official docs differ from local swagger snapshot, official docs win and matrix is patched.

## W5.1 checklist: Returns and cancellations (from swagger)
| Endpoint | Priority | Status | Target class |
|---|---|---|---|
| `POST /v1/cancel-reason/list` | P1 | done | `V1\CancelReasonV1` |
| `POST /v1/cancel-reason/list-by-order` | P1 | done | `V1\CancelReasonV1` |
| `POST /v1/cancel-reason/list-by-posting` | P1 | done | `V1\CancelReasonV1` |
| `POST /v1/order/cancel` | P1 | done | `V1\OrderV1` |
| `POST /v1/order/cancel/check` | P1 | done | `V1\OrderV1` |
| `POST /v1/order/cancel/status` | P1 | done | `V1\OrderV1` |
| `POST /v1/posting/cancel` | P1 | done | `V1\PostingV1` |
| `POST /v1/posting/cancel/status` | P1 | done | `V1\PostingV1` |
| `POST /v2/conditional-cancellation/list` | P1 | done | `V2\ConditionalCancellationV2` |
| `POST /v2/conditional-cancellation/approve` | P1 | done | `V2\ConditionalCancellationV2` |
| `POST /v2/conditional-cancellation/reject` | P1 | done | `V2\ConditionalCancellationV2` |
| `POST /v1/returns/list` | P1 | done | `V1\ReturnsV1` |
| `POST /v1/returns/company/fbs/info` | P1 | done | `V1\ReturnsV1` |
| `POST /v1/returns/settings/utilization/history` | P1 | done | `V1\ReturnsV1` |
| `POST /v1/returns/settings/utilization/info` | P1 | done | `V1\ReturnsV1` |
| `POST /v1/returns/settings/utilization/update` | P1 | done | `V1\ReturnsV1` |
| `POST /v1/returns/rfbs/action/set` | P1 | done | `V1\ReturnsV1` |
| `POST /v2/returns/rfbs/list` | P1 | done | `V2\ReturnsRfbsV2` |
| `POST /v2/returns/rfbs/get` | P1 | done | `V2\ReturnsRfbsV2` |
| `POST /v2/returns/rfbs/reject` | P1 | done | `V2\ReturnsRfbsV2` |
| `POST /v2/returns/rfbs/compensate` | P1 | done | `V2\ReturnsRfbsV2` |
| `POST /v2/returns/rfbs/verify` | P1 | done | `V2\ReturnsRfbsV2` |
| `POST /v2/returns/rfbs/receive-return` | P1 | done | `V2\ReturnsRfbsV2` |
| `POST /v2/returns/rfbs/return-money` | P1 | done | `V2\ReturnsRfbsV2` |
| `POST /v1/return/giveout/is-enabled` | P1 | done | `V1\ReturnsV1` |
| `POST /v1/return/giveout/list` | P1 | done | `V1\ReturnsV1` |
| `POST /v1/return/giveout/info` | P1 | done | `V1\ReturnsV1` |
| `POST /v1/return/giveout/barcode` | P1 | done | `V1\ReturnsV1` |
| `POST /v1/return/giveout/get-pdf` | P1 | done | `V1\ReturnsV1` |
| `POST /v1/return/giveout/get-png` | P1 | done | `V1\ReturnsV1` |
| `POST /v1/return/giveout/barcode-reset` | P1 | done | `V1\ReturnsV1` |
| `POST /v1/return/pass/create` | P1 | done | `V1\ReturnsV1` |
| `POST /v1/return/pass/update` | P1 | done | `V1\ReturnsV1` |
| `POST /v1/return/pass/delete` | P1 | done | `V1\ReturnsV1` |

## W5.2 checklist: Chats and messaging (from swagger)
| Endpoint | Priority | Status | Target class |
|---|---|---|---|
| `POST /v1/chat/send/file` | P1 | done | `V1\ChatV1` |
| `POST /v1/chat/send/message` | P1 | done | `V1\ChatV1` |
| `POST /v1/chat/start` | P1 | done | `V1\ChatV1` |
| `POST /v2/chat/list` | P1 | done | `V2\ChatV2` |
| `POST /v2/chat/read` | P1 | done | `V2\ChatV2` |
| `POST /v3/chat/list` | P1 | done | `V3\ChatV3` |
| `POST /v3/chat/history` | P1 | done | `V3\ChatV3` |

## W5.3 checklist: Invoices and documents (from swagger)
| Endpoint | Priority | Status | Target class |
|---|---|---|---|
| `POST /v1/invoice/file/upload` | P1 | done | `V1\InvoiceV1` |
| `POST /v1/invoice/delete` | P1 | done | `V1\InvoiceV1` |
| `POST /v2/invoice/create-or-update` | P1 | done | `V2\InvoiceV2` |
| `POST /v2/invoice/get` | P1 | done | `V2\InvoiceV2` |

## W6.1 checklist: Reports/analytics/finance/rating (from swagger)
| Endpoint | Priority | Status | Target class |
|---|---|---|---|
| `POST /v1/report/info` | P1 | done | `V1\ReportV1` |
| `POST /v1/report/list` | P1 | done | `V1\ReportV1` |
| `POST /v1/report/products/create` | P1 | done | `V1\ReportV1` |
| `POST /v2/report/returns/create` | P1 | done | `V2\ReportV2` |
| `POST /v1/report/postings/create` | P1 | done | `V1\ReportV1` |
| `POST /v1/report/discounted/create` | P1 | done | `V1\ReportV1` |
| `POST /v1/report/warehouse/stock` | P1 | done | `V1\ReportV1` |
| `POST /v1/report/placement/by-products/create` | P1 | done | `V1\ReportV1` |
| `POST /v1/report/placement/by-supplies/create` | P1 | done | `V1\ReportV1` |
| `POST /v1/report/marked-products-sales/create` | P1 | done | `V1\ReportV1` |
| `POST /v1/analytics/turnover/stocks` | P1 | done | `V1\AnalyticsV1` |
| `POST /v1/analytics/average-delivery-time` | P1 | done | `V1\AnalyticsV1` |
| `POST /v1/analytics/average-delivery-time/details` | P1 | done | `V1\AnalyticsV1` |
| `POST /v1/analytics/average-delivery-time/summary` | P1 | done | `V1\AnalyticsV1` |
| `POST /v1/analytics/stocks` | P1 | done | `V1\AnalyticsV1` |
| `POST /v1/analytics/data` | P1 | done | `V1\AnalyticsV1` |
| `POST /v1/analytics/product-queries` | P1 | done | `V1\AnalyticsV1` |
| `POST /v1/analytics/product-queries/details` | P1 | done | `V1\AnalyticsV1` |
| `POST /v1/analytics/manage/stocks` | P1 | done | `V1\AnalyticsV1` |
| `POST /v2/analytics/stock_on_warehouses` | P1 | done | `V2\AnalyticsV2` |
| `POST /v1/finance/cash-flow-statement/list` | P1 | done | `V1\FinanceV1` |
| `POST /v2/finance/realization` | P1 | done | `V2\FinanceV2` |
| `POST /v1/finance/realization/posting` | P1 | done | `V1\FinanceV1` |
| `POST /v3/finance/transaction/list` | P1 | done | `V3\FinanceV3` |
| `POST /v3/finance/transaction/totals` | P1 | done | `V3\FinanceV3` |
| `POST /v1/finance/document-b2b-sales` | P1 | done | `V1\FinanceV1` |
| `POST /v1/finance/document-b2b-sales/json` | P1 | done | `V1\FinanceV1` |
| `POST /v1/finance/mutual-settlement` | P1 | done | `V1\FinanceV1` |
| `POST /v1/finance/products/buyout` | P1 | done | `V1\FinanceV1` |
| `POST /v1/finance/compensation` | P1 | done | `V1\FinanceV1` |
| `POST /v1/finance/decompensation` | P1 | done | `V1\FinanceV1` |
| `POST /v1/finance/balance` | P1 | done | `V1\FinanceV1` |
| `POST /v1/finance/realization/by-day` | P1 | done | `V1\FinanceV1` |
| `POST /v1/rating/summary` | P1 | done | `V1\RatingV1` |
| `POST /v1/rating/history` | P1 | done | `V1\RatingV1` |
| `POST /v1/rating/index/fbs/info` | P1 | done | `V1\RatingV1` |
| `POST /v1/rating/index/fbs/posting/list` | P2 | done | `V1\PostingFbsV1` |

## W7.1a checklist: Product/prices tail (from swagger)
| Endpoint | Priority | Status | Target class |
|---|---|---|---|
| `POST /v1/barcode/add` | P1 | done | `V1\BarcodeV1` |
| `POST /v1/barcode/generate` | P1 | done | `V1\BarcodeV1` |
| `POST /v1/product/update/offer-id` | P1 | done | `V1\ProductV1` |
| `POST /v1/product/info/subscription` | P1 | done | `V1\ProductV1` |
| `POST /v1/product/related-sku/get` | P1 | done | `V1\ProductV1` |
| `POST /v1/product/info/wrong-volume` | P1 | done | `V1\ProductV1` |
| `POST /v1/product/placement-zone/info` | P1 | done | `V1\ProductV1` |
| `POST /v1/product/info/warehouse/stocks` | P1 | done | `V1\ProductV1` |
| `POST /v1/product/update/discount` | P1 | done | `V1\ProductV1` |
| `POST /v1/product/action/timer/update` | P1 | done | `V1\ProductV1` |
| `POST /v1/product/action/timer/status` | P1 | done | `V1\ProductV1` |
| `POST /v1/product/digital/stocks/import` | P1 | done | `V1\ProductV1` |
| `POST /v1/product/certification/list` | P1 | done | `V1\ProductV1` |
| `POST /v1/product/visibility/set` | P1 | done | `V1\ProductV1` |
| `POST /v1/product/quant/info` | P1 | done | `V1\ProductV1` |
| `POST /v1/product/quant/list` | P1 | done | `V1\ProductV1` |
| `POST /v1/product/stairway-discount/by-quantity/get` | P1 | done | `V1\ProductV1` |
| `POST /v1/product/stairway-discount/by-quantity/set` | P1 | done | `V1\ProductV1` |
| `POST /v2/product/certification/list` | P1 | done | `V2\ProductV2` |
| `POST /v4/product/info/limit` | P1 | done | `V4\ProductV4` |
| `POST /v4/product/info/stocks` | P1 | done | `V4\ProductV4` |
| `POST /v5/product/info/prices` | P1 | done | `V5\ProductV5` |

## W7.1b checklist: Cargoes/carriage/draft/fbp logistics (from swagger)
| Endpoint scope | Size | Status | Target class |
|---|---|---|---|
| `GET /v1/cargoes-label/file/{file_guid}` + `POST /v1/cargoes-label/*` | 3 | done | `V1\CargoesLabelV1` |
| `POST /v1/cargoes/*` | 6 | done | `V1\CargoesV1` |
| `POST /v2/cargoes/create/info` | 1 | done | `V2\CargoesV2` |
| `POST /v1/assembly/carriage/*` | 2 | done | `V1\AssemblyCarriageV1` |
| `POST /v1/carriage/*` | 11 | done | `V1\CarriageV1` |
| `POST /v2/carriage/delivery/list` | 1 | done | `V2\CarriageV2` |
| `POST /v1/draft/*` | 8 | done | `V1\DraftV1` |
| `POST /v2/draft/*` | 4 | done | `V2\DraftV2` |
| `POST /v1/fbp/*` | 45 | done | `V1\FbpV1` |

## W7.2 checklist: Notifications/feedback/search/receipts/seller (from swagger)
| Endpoint scope | Size | Status | Target class |
|---|---|---|---|
| `POST /v1/notification/*` | 7 | done | `V1\NotificationV1` |
| `POST /v1/question/*` + `POST /v1/question/answer/*` | 8 | done | `V1\QuestionV1` |
| `POST /v1/review/*` + `POST /v1/review/comment/*` | 7 | done | `V1\ReviewV1` |
| `POST /v1/receipts/*` | 3 | done | `V1\ReceiptsV1` |
| `POST /v1/search-queries/*` | 2 | done | `V1\SearchQueriesV1` |
| `POST /v1/seller/info`, `POST /v1/seller/ozon-logistics/info` | 2 | done | `V1\SellerV1` |
| `POST /v1/roles` | 1 | done | `V1\RolesV1` |

## W7.3 checklist: Utility logistics/platform endpoints (from swagger)
| Endpoint scope | Size | Status | Target class |
|---|---|---|---|
| `POST /v1/cluster/list`, `POST /v2/cluster/list` | 2 | done | `V1\ClusterV1`, `V2\ClusterV2` |
| `POST /v1/delivery/*`, `POST /v2/delivery/checkout` | 5 | done | `V1\DeliveryV1`, `V2\DeliveryV2` |
| `POST /v1/pass/list` | 1 | done | `V1\PassV1` |
| `POST /v1/polygon/*`, `POST /v2/polygon/bind` | 7 | done | `V1\PolygonV1`, `V2\PolygonV2` |
| `POST /v1/posting/cutoff/set`, `posting/digital/*`, `posting/marks`, `posting/unpaid-legal/product/list` | 5 | done | `V1\PostingV1` |
| `POST /v1/removal/from-stock/list`, `POST /v1/removal/from-supply/list` | 2 | done | `V1\RemovalV1` |
| `POST /v2/order/create` | 1 | done | `V2\OrderV2` |

## Next concrete PR sequence
1. `W7.4`: Verify templated endpoint `/v1/cargoes-label/file/{file_guid}` against runtime behavior and finalize coverage note.
2. `W7.5`: Final hardening pass: payload-focused tests for high-risk endpoints and docs examples cleanup.
