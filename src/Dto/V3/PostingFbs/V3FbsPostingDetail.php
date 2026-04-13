<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V3FbsPostingDetail implements OzonDtoInterface
{
    /**
     * @param list<V3AdditionalDataItem> $additionalData
     * @param array<array-key, mixed> $availableActions
     * @param list<V3PostingProductDetail> $products
     * @param list<string> $relatedWeightPostings
     * @param list<PostingV4PostingFbsListResponsePostingsTarifficationStep> $tarifficationSteps
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $additionalData,
        public ?V3Addressee $addressee,
        public ?V3FbsPostingAnalyticsData $analyticsData,
        public array $availableActions,
        public ?V3Barcodes $barcodes,
        public ?V3Cancellation $cancellation,
        public ?FbsPostingDetailCourier $courier,
        public ?V3Customer $customer,
        public ?string $deliveringDate,
        public ?V3DeliveryMethod $deliveryMethod,
        public ?string $deliveryPrice,
        public ?string $factDeliveryDate,
        public ?V3PostingFinancialData $financialData,
        public ?string $inProcessAt,
        public ?bool $isExpress,
        public ?bool $isMultibox,
        public ?V2FboSinglePostingLegalInfo $legalInfo,
        public ?int $multiBoxQty,
        public ?V3FbsPostingDetailOptional $optional,
        public ?int $orderId,
        public ?string $orderNumber,
        public ?string $parentPostingNumber,
        public ?string $pickupCodeVerifiedAt,
        public ?string $postingNumber,
        public ?V3FbsPostingProductExemplarsV3 $productExemplars,
        public array $products,
        public ?string $providerStatus,
        public ?FbsPostingDetailPrrOption $prrOption,
        public ?V3FbsPostingDetailRelatedPostings $relatedPostings,
        public array $relatedWeightPostings,
        public ?bool $requireBlrTraceableAttrs,
        public ?V3FbsPostingRequirementsV3 $requirements,
        public ?string $shipmentDate,
        public ?string $shipmentDateWithoutDelay,
        public ?string $status,
        public ?string $substatus,
        public ?string $previousSubstatus,
        public ?string $tplIntegrationType,
        public ?string $trackingNumber,
        public ?V3FbsTariffication $tariffication,
        public array $tarifficationSteps,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            additionalData: OzonDtoValue::objectList($payload['additional_data'] ?? null, V3AdditionalDataItem::class),
            addressee: OzonDtoValue::object($payload['addressee'] ?? null, V3Addressee::class),
            analyticsData: OzonDtoValue::object($payload['analytics_data'] ?? null, V3FbsPostingAnalyticsData::class),
            availableActions: OzonDtoValue::array($payload['available_actions'] ?? null),
            barcodes: OzonDtoValue::object($payload['barcodes'] ?? null, V3Barcodes::class),
            cancellation: OzonDtoValue::object($payload['cancellation'] ?? null, V3Cancellation::class),
            courier: OzonDtoValue::object($payload['courier'] ?? null, FbsPostingDetailCourier::class),
            customer: OzonDtoValue::object($payload['customer'] ?? null, V3Customer::class),
            deliveringDate: OzonDtoValue::string($payload['delivering_date'] ?? null),
            deliveryMethod: OzonDtoValue::object($payload['delivery_method'] ?? null, V3DeliveryMethod::class),
            deliveryPrice: OzonDtoValue::string($payload['delivery_price'] ?? null),
            factDeliveryDate: OzonDtoValue::string($payload['fact_delivery_date'] ?? null),
            financialData: OzonDtoValue::object($payload['financial_data'] ?? null, V3PostingFinancialData::class),
            inProcessAt: OzonDtoValue::string($payload['in_process_at'] ?? null),
            isExpress: OzonDtoValue::bool($payload['is_express'] ?? null),
            isMultibox: OzonDtoValue::bool($payload['is_multibox'] ?? null),
            legalInfo: OzonDtoValue::object($payload['legal_info'] ?? null, V2FboSinglePostingLegalInfo::class),
            multiBoxQty: OzonDtoValue::int($payload['multi_box_qty'] ?? null),
            optional: OzonDtoValue::object($payload['optional'] ?? null, V3FbsPostingDetailOptional::class),
            orderId: OzonDtoValue::int($payload['order_id'] ?? null),
            orderNumber: OzonDtoValue::string($payload['order_number'] ?? null),
            parentPostingNumber: OzonDtoValue::string($payload['parent_posting_number'] ?? null),
            pickupCodeVerifiedAt: OzonDtoValue::string($payload['pickup_code_verified_at'] ?? null),
            postingNumber: OzonDtoValue::string($payload['posting_number'] ?? null),
            productExemplars: OzonDtoValue::object($payload['product_exemplars'] ?? null, V3FbsPostingProductExemplarsV3::class),
            products: OzonDtoValue::objectList($payload['products'] ?? null, V3PostingProductDetail::class),
            providerStatus: OzonDtoValue::string($payload['provider_status'] ?? null),
            prrOption: OzonDtoValue::object($payload['prr_option'] ?? null, FbsPostingDetailPrrOption::class),
            relatedPostings: OzonDtoValue::object($payload['related_postings'] ?? null, V3FbsPostingDetailRelatedPostings::class),
            relatedWeightPostings: OzonDtoValue::array($payload['related_weight_postings'] ?? null),
            requireBlrTraceableAttrs: OzonDtoValue::bool($payload['require_blr_traceable_attrs'] ?? null),
            requirements: OzonDtoValue::object($payload['requirements'] ?? null, V3FbsPostingRequirementsV3::class),
            shipmentDate: OzonDtoValue::string($payload['shipment_date'] ?? null),
            shipmentDateWithoutDelay: OzonDtoValue::string($payload['shipment_date_without_delay'] ?? null),
            status: OzonDtoValue::string($payload['status'] ?? null),
            substatus: OzonDtoValue::string($payload['substatus'] ?? null),
            previousSubstatus: OzonDtoValue::string($payload['previous_substatus'] ?? null),
            tplIntegrationType: OzonDtoValue::string($payload['tpl_integration_type'] ?? null),
            trackingNumber: OzonDtoValue::string($payload['tracking_number'] ?? null),
            tariffication: OzonDtoValue::object($payload['tariffication'] ?? null, V3FbsTariffication::class),
            tarifficationSteps: OzonDtoValue::objectList($payload['tariffication_steps'] ?? null, PostingV4PostingFbsListResponsePostingsTarifficationStep::class),
            extra: OzonDtoValue::extra($payload, ['additional_data', 'addressee', 'analytics_data', 'available_actions', 'barcodes', 'cancellation', 'courier', 'customer', 'delivering_date', 'delivery_method', 'delivery_price', 'fact_delivery_date', 'financial_data', 'in_process_at', 'is_express', 'is_multibox', 'legal_info', 'multi_box_qty', 'optional', 'order_id', 'order_number', 'parent_posting_number', 'pickup_code_verified_at', 'posting_number', 'product_exemplars', 'products', 'provider_status', 'prr_option', 'related_postings', 'related_weight_postings', 'require_blr_traceable_attrs', 'requirements', 'shipment_date', 'shipment_date_without_delay', 'status', 'substatus', 'previous_substatus', 'tpl_integration_type', 'tracking_number', 'tariffication', 'tariffication_steps']),
        );
    }
}
