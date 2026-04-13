<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Analytics;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1AnalyticsStocksResponseItem implements OzonDtoInterface
{
    /**
     * @param list<string> $itemTags
     * @param list<string> $placementZone
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $ads,
        public ?float $adsCluster,
        public ?int $availableStockCount,
        public ?int $clusterId,
        public ?string $clusterName,
        public ?int $daysWithoutSales,
        public ?int $daysWithoutSalesCluster,
        public ?int $excessStockCount,
        public ?int $expiringStockCount,
        public ?float $idc,
        public ?float $idcCluster,
        public ?int $inboundReplenishment,
        public array $itemTags,
        public ?int $macrolocalClusterId,
        public ?string $name,
        public ?string $offerId,
        public ?int $otherStockCount,
        public ?int $outboundPendingDelivery,
        public ?int $outboundReturnsPicking,
        public ?int $outboundReturnsReadyToShip,
        public ?int $outboundReturnsReturnToSeller,
        public array $placementZone,
        public ?int $requestedStockCount,
        public ?int $returnFromCustomerStockCount,
        public ?int $returnToSellerStockCount,
        public ?int $sku,
        public ?int $stockDefectStockCount,
        public ?int $stockNotBeingSold,
        public ?int $transitDefectStockCount,
        public ?int $transitStockCount,
        public ?string $turnoverGrade,
        public ?string $turnoverGradeCluster,
        public ?int $validStockCount,
        public ?int $waitingDocsStockCount,
        public ?int $waitingDocsToExportStockCount,
        public ?int $warehouseId,
        public ?string $warehouseName,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            ads: OzonDtoValue::float($payload['ads'] ?? null),
            adsCluster: OzonDtoValue::float($payload['ads_cluster'] ?? null),
            availableStockCount: OzonDtoValue::int($payload['available_stock_count'] ?? null),
            clusterId: OzonDtoValue::int($payload['cluster_id'] ?? null),
            clusterName: OzonDtoValue::string($payload['cluster_name'] ?? null),
            daysWithoutSales: OzonDtoValue::int($payload['days_without_sales'] ?? null),
            daysWithoutSalesCluster: OzonDtoValue::int($payload['days_without_sales_cluster'] ?? null),
            excessStockCount: OzonDtoValue::int($payload['excess_stock_count'] ?? null),
            expiringStockCount: OzonDtoValue::int($payload['expiring_stock_count'] ?? null),
            idc: OzonDtoValue::float($payload['idc'] ?? null),
            idcCluster: OzonDtoValue::float($payload['idc_cluster'] ?? null),
            inboundReplenishment: OzonDtoValue::int($payload['inbound_replenishment'] ?? null),
            itemTags: OzonDtoValue::array($payload['item_tags'] ?? null),
            macrolocalClusterId: OzonDtoValue::int($payload['macrolocal_cluster_id'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            otherStockCount: OzonDtoValue::int($payload['other_stock_count'] ?? null),
            outboundPendingDelivery: OzonDtoValue::int($payload['outbound_pending_delivery'] ?? null),
            outboundReturnsPicking: OzonDtoValue::int($payload['outbound_returns_picking'] ?? null),
            outboundReturnsReadyToShip: OzonDtoValue::int($payload['outbound_returns_ready_to_ship'] ?? null),
            outboundReturnsReturnToSeller: OzonDtoValue::int($payload['outbound_returns_return_to_seller'] ?? null),
            placementZone: OzonDtoValue::array($payload['placement_zone'] ?? null),
            requestedStockCount: OzonDtoValue::int($payload['requested_stock_count'] ?? null),
            returnFromCustomerStockCount: OzonDtoValue::int($payload['return_from_customer_stock_count'] ?? null),
            returnToSellerStockCount: OzonDtoValue::int($payload['return_to_seller_stock_count'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            stockDefectStockCount: OzonDtoValue::int($payload['stock_defect_stock_count'] ?? null),
            stockNotBeingSold: OzonDtoValue::int($payload['stock_not_being_sold'] ?? null),
            transitDefectStockCount: OzonDtoValue::int($payload['transit_defect_stock_count'] ?? null),
            transitStockCount: OzonDtoValue::int($payload['transit_stock_count'] ?? null),
            turnoverGrade: OzonDtoValue::string($payload['turnover_grade'] ?? null),
            turnoverGradeCluster: OzonDtoValue::string($payload['turnover_grade_cluster'] ?? null),
            validStockCount: OzonDtoValue::int($payload['valid_stock_count'] ?? null),
            waitingDocsStockCount: OzonDtoValue::int($payload['waiting_docs_stock_count'] ?? null),
            waitingDocsToExportStockCount: OzonDtoValue::int($payload['waiting_docs_to_export_stock_count'] ?? null),
            warehouseId: OzonDtoValue::int($payload['warehouse_id'] ?? null),
            warehouseName: OzonDtoValue::string($payload['warehouse_name'] ?? null),
            extra: OzonDtoValue::extra($payload, ['ads', 'ads_cluster', 'available_stock_count', 'cluster_id', 'cluster_name', 'days_without_sales', 'days_without_sales_cluster', 'excess_stock_count', 'expiring_stock_count', 'idc', 'idc_cluster', 'inbound_replenishment', 'item_tags', 'macrolocal_cluster_id', 'name', 'offer_id', 'other_stock_count', 'outbound_pending_delivery', 'outbound_returns_picking', 'outbound_returns_ready_to_ship', 'outbound_returns_return_to_seller', 'placement_zone', 'requested_stock_count', 'return_from_customer_stock_count', 'return_to_seller_stock_count', 'sku', 'stock_defect_stock_count', 'stock_not_being_sold', 'transit_defect_stock_count', 'transit_stock_count', 'turnover_grade', 'turnover_grade_cluster', 'valid_stock_count', 'waiting_docs_stock_count', 'waiting_docs_to_export_stock_count', 'warehouse_id', 'warehouse_name']),
        );
    }
}
