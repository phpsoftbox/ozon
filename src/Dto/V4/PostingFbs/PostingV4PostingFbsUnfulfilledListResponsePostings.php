<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V4\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PostingV4PostingFbsUnfulfilledListResponsePostings implements OzonDtoInterface
{
    /**
     * @param list<string> $availableActions
     * @param list<PostingV4PostingFbsUnfulfilledListResponsePostingsProducts> $products
     * @param list<PostingV4PostingFbsUnfulfilledListResponsePostingsTarifficationStep> $tarifficationSteps
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?PostingV4PostingFbsUnfulfilledListResponsePostingsAddressee $addressee,
        public ?PostingV4PostingFbsUnfulfilledListResponsePostingsAnalyticsData $analyticsData,
        public array $availableActions,
        public ?PostingV4PostingFbsUnfulfilledListResponsePostingsBarcodes $barcodes,
        public ?PostingV4PostingFbsUnfulfilledListResponsePostingsCancellation $cancellation,
        public ?PostingV4PostingFbsUnfulfilledListResponsePostingsCustomer $customer,
        public ?PostingV4PostingFbsUnfulfilledListResponsePostingsContainer $container,
        public ?string $containerSortType,
        public ?string $deliveringDate,
        public ?PostingV4PostingFbsUnfulfilledListResponsePostingsDeliveryMethod $deliveryMethod,
        public ?string $deliverySchema,
        public ?int $destinationPlaceId,
        public ?string $destinationPlaceName,
        public ?PostingV4PostingFbsUnfulfilledListResponsePostingsExternalOrder $externalOrder,
        public ?PostingV4PostingFbsUnfulfilledListResponsePostingsFinancialData $financialData,
        public ?string $inProcessAt,
        public ?string $integrationTypeFlow,
        public ?bool $isClickAndCollect,
        public ?bool $isExpress,
        public ?bool $isMultibox,
        public ?bool $isPresortable,
        public ?PostingV4PostingFbsUnfulfilledListResponsePostingsLegalInfo $legalInfo,
        public ?int $multiBoxQty,
        public ?PostingV4PostingFbsUnfulfilledListResponsePostingsOptional $optional,
        public ?int $orderId,
        public ?string $orderNumber,
        public ?string $parentPostingNumber,
        public ?string $pickupCodeVerifiedAt,
        public ?string $postingNumber,
        public array $products,
        public ?string $prrOption,
        public ?int $quantumId,
        public ?bool $requireBlrTraceableAttrs,
        public ?PostingV4PostingFbsUnfulfilledListResponsePostingsRequirements $requirements,
        public ?string $shipmentDate,
        public ?string $shipmentDateWithoutDelay,
        public ?PostingV4PostingFbsUnfulfilledListResponsePostingsSortingCenter $sortingCenter,
        public ?string $status,
        public ?string $substatus,
        public ?PostingV4PostingFbsUnfulfilledListResponsePostingsTariffication $tariffication,
        public array $tarifficationSteps,
        public ?string $tplIntegrationType,
        public ?string $trackingNumber,
        public ?float $volumeWeight,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            addressee: OzonDtoValue::object($payload['addressee'] ?? null, PostingV4PostingFbsUnfulfilledListResponsePostingsAddressee::class),
            analyticsData: OzonDtoValue::object($payload['analytics_data'] ?? null, PostingV4PostingFbsUnfulfilledListResponsePostingsAnalyticsData::class),
            availableActions: OzonDtoValue::array($payload['available_actions'] ?? null),
            barcodes: OzonDtoValue::object($payload['barcodes'] ?? null, PostingV4PostingFbsUnfulfilledListResponsePostingsBarcodes::class),
            cancellation: OzonDtoValue::object($payload['cancellation'] ?? null, PostingV4PostingFbsUnfulfilledListResponsePostingsCancellation::class),
            customer: OzonDtoValue::object($payload['customer'] ?? null, PostingV4PostingFbsUnfulfilledListResponsePostingsCustomer::class),
            container: OzonDtoValue::object($payload['container'] ?? null, PostingV4PostingFbsUnfulfilledListResponsePostingsContainer::class),
            containerSortType: OzonDtoValue::string($payload['container_sort_type'] ?? null),
            deliveringDate: OzonDtoValue::string($payload['delivering_date'] ?? null),
            deliveryMethod: OzonDtoValue::object($payload['delivery_method'] ?? null, PostingV4PostingFbsUnfulfilledListResponsePostingsDeliveryMethod::class),
            deliverySchema: OzonDtoValue::string($payload['delivery_schema'] ?? null),
            destinationPlaceId: OzonDtoValue::int($payload['destination_place_id'] ?? null),
            destinationPlaceName: OzonDtoValue::string($payload['destination_place_name'] ?? null),
            externalOrder: OzonDtoValue::object($payload['external_order'] ?? null, PostingV4PostingFbsUnfulfilledListResponsePostingsExternalOrder::class),
            financialData: OzonDtoValue::object($payload['financial_data'] ?? null, PostingV4PostingFbsUnfulfilledListResponsePostingsFinancialData::class),
            inProcessAt: OzonDtoValue::string($payload['in_process_at'] ?? null),
            integrationTypeFlow: OzonDtoValue::string($payload['integration_type_flow'] ?? null),
            isClickAndCollect: OzonDtoValue::bool($payload['is_click_and_collect'] ?? null),
            isExpress: OzonDtoValue::bool($payload['is_express'] ?? null),
            isMultibox: OzonDtoValue::bool($payload['is_multibox'] ?? null),
            isPresortable: OzonDtoValue::bool($payload['is_presortable'] ?? null),
            legalInfo: OzonDtoValue::object($payload['legal_info'] ?? null, PostingV4PostingFbsUnfulfilledListResponsePostingsLegalInfo::class),
            multiBoxQty: OzonDtoValue::int($payload['multi_box_qty'] ?? null),
            optional: OzonDtoValue::object($payload['optional'] ?? null, PostingV4PostingFbsUnfulfilledListResponsePostingsOptional::class),
            orderId: OzonDtoValue::int($payload['order_id'] ?? null),
            orderNumber: OzonDtoValue::string($payload['order_number'] ?? null),
            parentPostingNumber: OzonDtoValue::string($payload['parent_posting_number'] ?? null),
            pickupCodeVerifiedAt: OzonDtoValue::string($payload['pickup_code_verified_at'] ?? null),
            postingNumber: OzonDtoValue::string($payload['posting_number'] ?? null),
            products: OzonDtoValue::objectList($payload['products'] ?? null, PostingV4PostingFbsUnfulfilledListResponsePostingsProducts::class),
            prrOption: OzonDtoValue::string($payload['prr_option'] ?? null),
            quantumId: OzonDtoValue::int($payload['quantum_id'] ?? null),
            requireBlrTraceableAttrs: OzonDtoValue::bool($payload['require_blr_traceable_attrs'] ?? null),
            requirements: OzonDtoValue::object($payload['requirements'] ?? null, PostingV4PostingFbsUnfulfilledListResponsePostingsRequirements::class),
            shipmentDate: OzonDtoValue::string($payload['shipment_date'] ?? null),
            shipmentDateWithoutDelay: OzonDtoValue::string($payload['shipment_date_without_delay'] ?? null),
            sortingCenter: OzonDtoValue::object($payload['sorting_center'] ?? null, PostingV4PostingFbsUnfulfilledListResponsePostingsSortingCenter::class),
            status: OzonDtoValue::string($payload['status'] ?? null),
            substatus: OzonDtoValue::string($payload['substatus'] ?? null),
            tariffication: OzonDtoValue::object($payload['tariffication'] ?? null, PostingV4PostingFbsUnfulfilledListResponsePostingsTariffication::class),
            tarifficationSteps: OzonDtoValue::objectList($payload['tariffication_steps'] ?? null, PostingV4PostingFbsUnfulfilledListResponsePostingsTarifficationStep::class),
            tplIntegrationType: OzonDtoValue::string($payload['tpl_integration_type'] ?? null),
            trackingNumber: OzonDtoValue::string($payload['tracking_number'] ?? null),
            volumeWeight: OzonDtoValue::float($payload['volume_weight'] ?? null),
            extra: OzonDtoValue::extra($payload, ['addressee', 'analytics_data', 'available_actions', 'barcodes', 'cancellation', 'customer', 'container', 'container_sort_type', 'delivering_date', 'delivery_method', 'delivery_schema', 'destination_place_id', 'destination_place_name', 'external_order', 'financial_data', 'in_process_at', 'integration_type_flow', 'is_click_and_collect', 'is_express', 'is_multibox', 'is_presortable', 'legal_info', 'multi_box_qty', 'optional', 'order_id', 'order_number', 'parent_posting_number', 'pickup_code_verified_at', 'posting_number', 'products', 'prr_option', 'quantum_id', 'require_blr_traceable_attrs', 'requirements', 'shipment_date', 'shipment_date_without_delay', 'sorting_center', 'status', 'substatus', 'tariffication', 'tariffication_steps', 'tpl_integration_type', 'tracking_number', 'volume_weight']),
        );
    }
}
