<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\Dto;

use PhpSoftBox\Ozon\Dto\V1\Actions\SellerApiGetSellerActionsV1Response;
use PhpSoftBox\Ozon\Dto\V1\Actions\SellerApiGetSellerProductV1Response;
use PhpSoftBox\Ozon\Dto\V1\Actions\SellerApiProductV1Response;
use PhpSoftBox\Ozon\Dto\V1\Actions\SellerApiProductV1ResponseDeactivate;
use PhpSoftBox\Ozon\Dto\V1\Actions\V1ApproveDeclineDiscountTasksResponse;
use PhpSoftBox\Ozon\Dto\V1\Actions\V1GetDiscountTaskListResponse;
use PhpSoftBox\Ozon\Dto\V1\Analytics\AnalyticsAnalyticsGetDataResponse;
use PhpSoftBox\Ozon\Dto\V1\Analytics\V1AnalyticsManageStocksResponse;
use PhpSoftBox\Ozon\Dto\V1\Analytics\V1AnalyticsProductQueriesDetailsResponse;
use PhpSoftBox\Ozon\Dto\V1\Analytics\V1AnalyticsProductQueriesResponse;
use PhpSoftBox\Ozon\Dto\V1\Analytics\V1AnalyticsStocksResponse;
use PhpSoftBox\Ozon\Dto\V1\Analytics\V1AnalyticsTurnoverStocksResponse;
use PhpSoftBox\Ozon\Dto\V1\Analytics\V1AverageDeliveryTimeDetailsResponse;
use PhpSoftBox\Ozon\Dto\V1\Analytics\V1AverageDeliveryTimeResponse;
use PhpSoftBox\Ozon\Dto\V1\Analytics\V1AverageDeliveryTimeSummaryResponse;
use PhpSoftBox\Ozon\Dto\V1\Assembly\V1AssemblyCarriagePostingListResponse;
use PhpSoftBox\Ozon\Dto\V1\Assembly\V1AssemblyCarriageProductListResponse;
use PhpSoftBox\Ozon\Dto\V1\Assembly\V1AssemblyFbsPostingListResponse;
use PhpSoftBox\Ozon\Dto\V1\Assembly\V1AssemblyFbsProductListResponse;
use PhpSoftBox\Ozon\Dto\V1\Barcode\V1AddBarcodeResponse;
use PhpSoftBox\Ozon\Dto\V1\Barcode\V1GenerateBarcodeResponse;
use PhpSoftBox\Ozon\Dto\V1\Brand\BrandBrandCompanyCertificationListResponse;
use PhpSoftBox\Ozon\Dto\V1\CancelReason\V1CancelReasonListByOrderResponse;
use PhpSoftBox\Ozon\Dto\V1\CancelReason\V1CancelReasonListByPostingResponse;
use PhpSoftBox\Ozon\Dto\V1\CancelReason\V1CancelReasonListResponse;
use PhpSoftBox\Ozon\Dto\V1\Cargoes\V1CargoesCreateInfoResponse;
use PhpSoftBox\Ozon\Dto\V1\Cargoes\V1CargoesCreateResponse;
use PhpSoftBox\Ozon\Dto\V1\Cargoes\V1CargoesDeleteResponse;
use PhpSoftBox\Ozon\Dto\V1\Cargoes\V1CargoesDeleteStatusResponse;
use PhpSoftBox\Ozon\Dto\V1\Cargoes\V1CargoesGetResponse;
use PhpSoftBox\Ozon\Dto\V1\Cargoes\V1CargoesRulesGetResponse;
use PhpSoftBox\Ozon\Dto\V1\CargoesLabel\CargoesAPICargoesLabelFileResponse;
use PhpSoftBox\Ozon\Dto\V1\CargoesLabel\V1CargoesLabelCreateResponse;
use PhpSoftBox\Ozon\Dto\V1\CargoesLabel\V1CargoesLabelGetResponse;
use PhpSoftBox\Ozon\Dto\V1\Carriage\CarriageCarriageGetResponse;
use PhpSoftBox\Ozon\Dto\V1\Carriage\CarriagePassDeleteResponse;
use PhpSoftBox\Ozon\Dto\V1\Carriage\CarriagePassUpdateResponse;
use PhpSoftBox\Ozon\Dto\V1\Carriage\SellerSellerAPIArrivalPassCreateResponse;
use PhpSoftBox\Ozon\Dto\V1\Carriage\V1CarriageActDiscrepancyPDFResponse;
use PhpSoftBox\Ozon\Dto\V1\Carriage\V1CarriageApproveResponse;
use PhpSoftBox\Ozon\Dto\V1\Carriage\V1CarriageCancelResponse;
use PhpSoftBox\Ozon\Dto\V1\Carriage\V1CarriageCreateResponse;
use PhpSoftBox\Ozon\Dto\V1\Carriage\V1CarriageDeliveryListResponse;
use PhpSoftBox\Ozon\Dto\V1\Carriage\V1CarriageEttnStatusResponse;
use PhpSoftBox\Ozon\Dto\V1\Carriage\V1SetPostingsResponse;
use PhpSoftBox\Ozon\Dto\V1\Chat\ChatChatSendFileResponse;
use PhpSoftBox\Ozon\Dto\V1\Chat\ChatChatSendMessageResponse;
use PhpSoftBox\Ozon\Dto\V1\Chat\ChatChatStartResponse;
use PhpSoftBox\Ozon\Dto\V1\Cluster\V1DraftClusterListResponse;
use PhpSoftBox\Ozon\Dto\V1\Delivery\V1DeliveryCheckResponse;
use PhpSoftBox\Ozon\Dto\V1\Delivery\V1DeliveryMapResponse;
use PhpSoftBox\Ozon\Dto\V1\Delivery\V1DeliveryPointInfoResponse;
use PhpSoftBox\Ozon\Dto\V1\Delivery\V1DeliveryPointListResponse;
use PhpSoftBox\Ozon\Dto\V1\DeliveryMethod\V1GetDeliveryMethodReturnSettingsV1Response;
use PhpSoftBox\Ozon\Dto\V1\DeliveryMethod\WarehouseDeliveryMethodListResponse;
use PhpSoftBox\Ozon\Dto\V1\DescriptionCategory\V1GetAttributesResponse;
use PhpSoftBox\Ozon\Dto\V1\DescriptionCategory\V1GetAttributeValuesResponse;
use PhpSoftBox\Ozon\Dto\V1\DescriptionCategory\V1GetTreeResponse;
use PhpSoftBox\Ozon\Dto\V1\DescriptionCategory\V1SearchAttributeValuesResponse;
use PhpSoftBox\Ozon\Dto\V1\Draft\V1DraftCreateCommonResponse;
use PhpSoftBox\Ozon\Dto\V1\Draft\V1DraftCreateInfoResponse;
use PhpSoftBox\Ozon\Dto\V1\Draft\V1DraftCreateResponse;
use PhpSoftBox\Ozon\Dto\V1\Draft\V1DraftSupplyCreateResponse;
use PhpSoftBox\Ozon\Dto\V1\Draft\V1DraftSupplyCreateStatusResponse;
use PhpSoftBox\Ozon\Dto\V1\Draft\V1DraftTimeslotInfoResponse;
use PhpSoftBox\Ozon\Dto\V1\FbpActFrom\V1FbpCheckActStateResponse;
use PhpSoftBox\Ozon\Dto\V1\FbpActFrom\V1FbpCreateActResponse;
use PhpSoftBox\Ozon\Dto\V1\FbpActTo\V1FbpCheckConsignmentNoteStateResponse;
use PhpSoftBox\Ozon\Dto\V1\FbpActTo\V1FbpCreateConsignmentNoteResponse;
use PhpSoftBox\Ozon\Dto\V1\FbpArchive\V1FbpArchiveGetResponse;
use PhpSoftBox\Ozon\Dto\V1\FbpArchive\V1FbpArchiveListResponse;
use PhpSoftBox\Ozon\Dto\V1\FbpDraft\V1FbpDraftDirectCreateResponse;
use PhpSoftBox\Ozon\Dto\V1\FbpDraft\V1FbpDraftDirectDeleteResponse;
use PhpSoftBox\Ozon\Dto\V1\FbpDraft\V1FbpDraftDirectGetTimeslotResponse;
use PhpSoftBox\Ozon\Dto\V1\FbpDraft\V1FbpDraftDirectProductValidateResponse;
use PhpSoftBox\Ozon\Dto\V1\FbpDraft\V1FbpDraftDirectRegistrateResponse;
use PhpSoftBox\Ozon\Dto\V1\FbpDraft\V1FbpDraftDirectSellerDlvCreateResponse;
use PhpSoftBox\Ozon\Dto\V1\FbpDraft\V1FbpDraftDirectSellerDlvEditResponse;
use PhpSoftBox\Ozon\Dto\V1\FbpDraft\V1FbpDraftDirectTimeslotEditResponse;
use PhpSoftBox\Ozon\Dto\V1\FbpDraft\V1FbpDraftDirectTplDlvCreateResponse;
use PhpSoftBox\Ozon\Dto\V1\FbpDraft\V1FbpDraftDirectTplDlvEditResponse;
use PhpSoftBox\Ozon\Dto\V1\FbpDraft\V1FbpDraftDropOffCreateResponse;
use PhpSoftBox\Ozon\Dto\V1\FbpDraft\V1FbpDraftDropOffDeleteResponse;
use PhpSoftBox\Ozon\Dto\V1\FbpDraft\V1FbpDraftDropOffDlvEditResponse;
use PhpSoftBox\Ozon\Dto\V1\FbpDraft\V1FbpDraftDropOffPointListResponse;
use PhpSoftBox\Ozon\Dto\V1\FbpDraft\V1FbpDraftDropOffPointTimetableResponse;
use PhpSoftBox\Ozon\Dto\V1\FbpDraft\V1FbpDraftDropOffProductValidateResponse;
use PhpSoftBox\Ozon\Dto\V1\FbpDraft\V1FbpDraftDropOffProvinceListResponse;
use PhpSoftBox\Ozon\Dto\V1\FbpDraft\V1FbpDraftDropOffRegistrateResponse;
use PhpSoftBox\Ozon\Dto\V1\FbpDraft\V1FbpDraftGetResponse;
use PhpSoftBox\Ozon\Dto\V1\FbpDraft\V1FbpDraftListResponse;
use PhpSoftBox\Ozon\Dto\V1\FbpDraft\V1FbpDraftPickupCreateResponse;
use PhpSoftBox\Ozon\Dto\V1\FbpDraft\V1FbpDraftPickUpDeleteResponse;
use PhpSoftBox\Ozon\Dto\V1\FbpDraft\V1FbpDraftPickupDlvEditResponse;
use PhpSoftBox\Ozon\Dto\V1\FbpDraft\V1FbpDraftPickUpProductValidateResponse;
use PhpSoftBox\Ozon\Dto\V1\FbpDraft\V1FbpDraftPickUpRegistrateResponse;
use PhpSoftBox\Ozon\Dto\V1\FbpLabel\V1FbpCreateLabelResponse;
use PhpSoftBox\Ozon\Dto\V1\FbpLabel\V1FbpGetLabelResponse;
use PhpSoftBox\Ozon\Dto\V1\FbpOrder\V1FbpAvailableTimeslotListResponse;
use PhpSoftBox\Ozon\Dto\V1\FbpOrder\V1FbpEditTimeslotResponse;
use PhpSoftBox\Ozon\Dto\V1\FbpOrder\V1FbpOrderDirectCancelResponse;
use PhpSoftBox\Ozon\Dto\V1\FbpOrder\V1FbpOrderDirectSellerDlvEditResponse;
use PhpSoftBox\Ozon\Dto\V1\FbpOrder\V1FbpOrderDropOffCancelResponse;
use PhpSoftBox\Ozon\Dto\V1\FbpOrder\V1FbpOrderDropOffDlvEditResponse;
use PhpSoftBox\Ozon\Dto\V1\FbpOrder\V1FbpOrderDropOffTimetableResponse;
use PhpSoftBox\Ozon\Dto\V1\FbpOrder\V1FbpOrderGetResponse;
use PhpSoftBox\Ozon\Dto\V1\FbpOrder\V1FbpOrderListResponse;
use PhpSoftBox\Ozon\Dto\V1\FbpOrder\V1FbpOrderPickUpCancelResponse;
use PhpSoftBox\Ozon\Dto\V1\FbpOrder\V1FbpOrderPickUpDlvEditResponse;
use PhpSoftBox\Ozon\Dto\V1\FbpWarehouse\V1FbpWarehouseListResponse;
use PhpSoftBox\Ozon\Dto\V1\FbsPosting\PostingAPIFbsPostingProductExemplarUpdateResponse;
use PhpSoftBox\Ozon\Dto\V1\Finance\CreateReportResponse;
use PhpSoftBox\Ozon\Dto\V1\Finance\GetRealizationReportByDayResponse;
use PhpSoftBox\Ozon\Dto\V1\Finance\V1CreateDocumentB2BSalesJSONReportResponse;
use PhpSoftBox\Ozon\Dto\V1\Finance\V1GetFinanceBalanceV1Response;
use PhpSoftBox\Ozon\Dto\V1\Finance\V1GetFinanceProductsBuyoutResponse;
use PhpSoftBox\Ozon\Dto\V1\Finance\V1GetRealizationReportPostingResponse;
use PhpSoftBox\Ozon\Dto\V1\Finance\V3FinanceCashFlowStatementListResponse;
use PhpSoftBox\Ozon\Dto\V1\Invoice\V1InvoiceDeleteResponse;
use PhpSoftBox\Ozon\Dto\V1\Invoice\V1InvoiceFileUploadResponse;
use PhpSoftBox\Ozon\Dto\V1\Notification\DeleteNotificationResponse;
use PhpSoftBox\Ozon\Dto\V1\Notification\EnableNotificationResponse;
use PhpSoftBox\Ozon\Dto\V1\Notification\NotificationV1CheckNotificationResponse;
use PhpSoftBox\Ozon\Dto\V1\Notification\NotificationV1GetNotificationPushTypeListResponse;
use PhpSoftBox\Ozon\Dto\V1\Notification\NotificationV1NotificationListResponse;
use PhpSoftBox\Ozon\Dto\V1\Notification\SetNotificationResponse;
use PhpSoftBox\Ozon\Dto\V1\Notification\UpdateNotificationResponse;
use PhpSoftBox\Ozon\Dto\V1\Order\V1OrderCancelCheckResponse;
use PhpSoftBox\Ozon\Dto\V1\Order\V1OrderCancelResponse;
use PhpSoftBox\Ozon\Dto\V1\Order\V1OrderCancelStatusResponse;
use PhpSoftBox\Ozon\Dto\V1\Pass\ArrivalpassArrivalPassListResponse;
use PhpSoftBox\Ozon\Dto\V1\Polygon\PolygonDeleteResponse;
use PhpSoftBox\Ozon\Dto\V1\Polygon\PolygonTimeCoordinatesUpdateResponse;
use PhpSoftBox\Ozon\Dto\V1\Polygon\PolygonTimeSetResponse;
use PhpSoftBox\Ozon\Dto\V1\Polygon\Polygonv1Empty;
use PhpSoftBox\Ozon\Dto\V1\Polygon\Polygonv1PolygonCreateResponse;
use PhpSoftBox\Ozon\Dto\V1\Polygon\V1PolygonListResponse;
use PhpSoftBox\Ozon\Dto\V1\Posting\Postingv1GetCarriageAvailableListResponse;
use PhpSoftBox\Ozon\Dto\V1\Posting\V1GetEtgbResponse;
use PhpSoftBox\Ozon\Dto\V1\Posting\V1ListPostingCodesResponse;
use PhpSoftBox\Ozon\Dto\V1\Posting\V1PostingCancelResponse;
use PhpSoftBox\Ozon\Dto\V1\Posting\V1PostingCancelStatusResponse;
use PhpSoftBox\Ozon\Dto\V1\Posting\V1PostingMarksResponse;
use PhpSoftBox\Ozon\Dto\V1\Posting\V1PostingUnpaidLegalProductListResponse;
use PhpSoftBox\Ozon\Dto\V1\Posting\V1SetPostingCutoffResponse;
use PhpSoftBox\Ozon\Dto\V1\Posting\V1UploadPostingCodesResponse;
use PhpSoftBox\Ozon\Dto\V1\PostingFbo\V1CancelReasonListResponseFbo;
use PhpSoftBox\Ozon\Dto\V1\PostingFbs\PostingCancelReasonResponse;
use PhpSoftBox\Ozon\Dto\V1\PostingFbs\V1CreateLabelBatchResponse;
use PhpSoftBox\Ozon\Dto\V1\PostingFbs\V1GetLabelBatchResponse;
use PhpSoftBox\Ozon\Dto\V1\PostingFbs\V1GetRestrictionsResponse;
use PhpSoftBox\Ozon\Dto\V1\PostingFbs\V1PostingFBSPickupCodeVerifyResponse;
use PhpSoftBox\Ozon\Dto\V1\PostingFbs\V1PostingFbsProductTraceableAttributeResponse;
use PhpSoftBox\Ozon\Dto\V1\PostingFbs\V1PostingFbsSplitResponse;
use PhpSoftBox\Ozon\Dto\V1\PostingFbs\V1PostingFbsTimeslotChangeRestrictionsResponse;
use PhpSoftBox\Ozon\Dto\V1\PostingFbs\V1PostingFbsTimeslotSetResponse;
use PhpSoftBox\Ozon\Dto\V1\PostingFbs\V1PostingFbsTraceableSplitResponse;
use PhpSoftBox\Ozon\Dto\V1\PricingStrategy\V1AddStrategyItemsResponse;
use PhpSoftBox\Ozon\Dto\V1\PricingStrategy\V1CreatePricingStrategyResponse;
use PhpSoftBox\Ozon\Dto\V1\PricingStrategy\V1DeleteStrategyItemsResponse;
use PhpSoftBox\Ozon\Dto\V1\PricingStrategy\V1GetCompetitorsResponse;
use PhpSoftBox\Ozon\Dto\V1\PricingStrategy\V1GetStrategyIDsByItemIDsResponse;
use PhpSoftBox\Ozon\Dto\V1\PricingStrategy\V1GetStrategyItemInfoResponse;
use PhpSoftBox\Ozon\Dto\V1\PricingStrategy\V1GetStrategyItemsResponse;
use PhpSoftBox\Ozon\Dto\V1\PricingStrategy\V1GetStrategyListResponse;
use PhpSoftBox\Ozon\Dto\V1\PricingStrategy\V1GetStrategyResponse;
use PhpSoftBox\Ozon\Dto\V1\Product\ProductBooleanResponse;
use PhpSoftBox\Ozon\Dto\V1\Product\ProductGetImportProductsInfoResponse;
use PhpSoftBox\Ozon\Dto\V1\Product\ProductImportProductsBySKUResponse;
use PhpSoftBox\Ozon\Dto\V1\Product\ProductImportProductsPricesResponse;
use PhpSoftBox\Ozon\Dto\V1\Product\ProductProductCertificationListResponse;
use PhpSoftBox\Ozon\Dto\V1\Product\ProductV1ProductVisibilitySetResponse;
use PhpSoftBox\Ozon\Dto\V1\Product\ProductV1QuantInfoResponse;
use PhpSoftBox\Ozon\Dto\V1\Product\ProductV1QuantListResponse;
use PhpSoftBox\Ozon\Dto\V1\Product\V1GetProductPlacementZoneInfoResponse;
use PhpSoftBox\Ozon\Dto\V1\Product\V1GetProductRatingBySkuResponse;
use PhpSoftBox\Ozon\Dto\V1\Product\V1GetProductStairwayDiscountByQuantityResponse;
use PhpSoftBox\Ozon\Dto\V1\Product\V1ProductGetRelatedSKUResponse;
use PhpSoftBox\Ozon\Dto\V1\Product\V1ProductPricesDetailsResponse;
use PhpSoftBox\Ozon\Dto\V1\Product\V1ProductUpdateAttributesResponse;
use PhpSoftBox\Ozon\Dto\V1\Product\V1ProductUpdateDiscountResponse;
use PhpSoftBox\Ozon\Dto\V1\Product\V1ProductUpdateOfferIdResponse;
use PhpSoftBox\Ozon\Dto\V1\Product\V1SetProductStairwayDiscountByQuantityResponse;
use PhpSoftBox\Ozon\Dto\V1\Product\V1StocksImportResponse;
use PhpSoftBox\Ozon\Dto\V1\ProductAction\ProductAPIActionTimerUpdateResponse;
use PhpSoftBox\Ozon\Dto\V1\ProductAction\V1ProductActionTimerStatusResponse;
use PhpSoftBox\Ozon\Dto\V1\ProductCertificate\ProductAPIProductCertificateCreateResponse;
use PhpSoftBox\Ozon\Dto\V1\ProductCertificate\ProductProductCertificateAccordanceTypesResponse;
use PhpSoftBox\Ozon\Dto\V1\ProductCertificate\ProductProductCertificateTypesResponse;
use PhpSoftBox\Ozon\Dto\V1\ProductCertificate\V1ProductCertificateDeleteResponse;
use PhpSoftBox\Ozon\Dto\V1\ProductCertificate\V1ProductCertificateInfoResponse;
use PhpSoftBox\Ozon\Dto\V1\ProductCertificate\V1ProductCertificateListResponse;
use PhpSoftBox\Ozon\Dto\V1\ProductCertificate\V1ProductCertificateProductsListResponse;
use PhpSoftBox\Ozon\Dto\V1\ProductCertificate\V1ProductCertificateProductStatusListResponse;
use PhpSoftBox\Ozon\Dto\V1\ProductCertificate\V1ProductCertificateRejectionReasonsListResponse;
use PhpSoftBox\Ozon\Dto\V1\ProductCertificate\V1ProductCertificateStatusListResponse;
use PhpSoftBox\Ozon\Dto\V1\ProductCertificate\V1ProductCertificateUnbindResponse;
use PhpSoftBox\Ozon\Dto\V1\ProductInfo\ProductGetProductInfoDescriptionResponse;
use PhpSoftBox\Ozon\Dto\V1\ProductInfo\Productsv1GetProductInfoStocksByWarehouseFbsResponse;
use PhpSoftBox\Ozon\Dto\V1\ProductInfo\V1GetProductInfoDiscountedResponse;
use PhpSoftBox\Ozon\Dto\V1\ProductInfo\V1GetProductInfoSubscriptionResponse;
use PhpSoftBox\Ozon\Dto\V1\ProductInfo\V1ProductInfoWarehouseStocksResponse;
use PhpSoftBox\Ozon\Dto\V1\ProductInfo\V1ProductInfoWrongVolumeResponse;
use PhpSoftBox\Ozon\Dto\V1\ProductPictures\Productv1ProductInfoPicturesResponse;
use PhpSoftBox\Ozon\Dto\V1\Question\QuestionAnswerDeleteResponse;
use PhpSoftBox\Ozon\Dto\V1\Question\QuestionChangeStatusResponse;
use PhpSoftBox\Ozon\Dto\V1\Question\V1QuestionAnswerCreateResponse;
use PhpSoftBox\Ozon\Dto\V1\Question\V1QuestionAnswerListResponse;
use PhpSoftBox\Ozon\Dto\V1\Question\V1QuestionCountResponse;
use PhpSoftBox\Ozon\Dto\V1\Question\V1QuestionInfoResponse;
use PhpSoftBox\Ozon\Dto\V1\Question\V1QuestionListResponse;
use PhpSoftBox\Ozon\Dto\V1\Question\V1QuestionTopSkuResponse;
use PhpSoftBox\Ozon\Dto\V1\Rating\V1GetFBSRatingIndexInfoV1Response;
use PhpSoftBox\Ozon\Dto\V1\Rating\V1ListFBSRatingIndexPostingsV1Response;
use PhpSoftBox\Ozon\Dto\V1\Rating\V1RatingHistoryV1Response;
use PhpSoftBox\Ozon\Dto\V1\Rating\V1RatingSummaryV1Response;
use PhpSoftBox\Ozon\Dto\V1\Receipts\V1GetReceiptResponse;
use PhpSoftBox\Ozon\Dto\V1\Receipts\V1ReceiptsSellerListResponse;
use PhpSoftBox\Ozon\Dto\V1\Receipts\V1UploadReceiptResponse;
use PhpSoftBox\Ozon\Dto\V1\Removal\V1GetSupplierReturnsSummaryReportResponse;
use PhpSoftBox\Ozon\Dto\V1\Removal\V1GetSupplyReturnsSummaryReportResponse;
use PhpSoftBox\Ozon\Dto\V1\Report\CommonCreateReportResponse;
use PhpSoftBox\Ozon\Dto\V1\Report\ReportCreateDiscountedResponse;
use PhpSoftBox\Ozon\Dto\V1\Report\ReportCreateReportResponse;
use PhpSoftBox\Ozon\Dto\V1\Report\ReportReportInfoResponse;
use PhpSoftBox\Ozon\Dto\V1\Report\ReportReportListResponse;
use PhpSoftBox\Ozon\Dto\V1\Report\V1CreatePlacementByProductsReportResponse;
use PhpSoftBox\Ozon\Dto\V1\Report\V1CreatePlacementBySuppliesReportResponse;
use PhpSoftBox\Ozon\Dto\V1\Return\ArrivalpassArrivalPassCreateResponse;
use PhpSoftBox\Ozon\Dto\V1\Return\ReturnAPIGiveoutBarcodeResetResponse;
use PhpSoftBox\Ozon\Dto\V1\Return\ReturnAPIGiveoutGetPDFResponse;
use PhpSoftBox\Ozon\Dto\V1\Return\ReturnAPIGiveoutGetPNGResponse;
use PhpSoftBox\Ozon\Dto\V1\Return\ReturnPassDeleteResponse;
use PhpSoftBox\Ozon\Dto\V1\Return\ReturnPassUpdateResponse;
use PhpSoftBox\Ozon\Dto\V1\Return\V1GiveoutGetBarcodeResponse;
use PhpSoftBox\Ozon\Dto\V1\Return\V1GiveoutInfoResponse;
use PhpSoftBox\Ozon\Dto\V1\Return\V1GiveoutIsEnabledResponse;
use PhpSoftBox\Ozon\Dto\V1\Return\V1GiveoutListResponse;
use PhpSoftBox\Ozon\Dto\V1\Returns\ReturnsAPIReturnsRfbsActionSetResponse;
use PhpSoftBox\Ozon\Dto\V1\Returns\UtilizationUpdateResponse;
use PhpSoftBox\Ozon\Dto\V1\Returns\V1GetReturnsListResponse;
use PhpSoftBox\Ozon\Dto\V1\Returns\V1ReturnsCompanyFbsInfoResponse;
use PhpSoftBox\Ozon\Dto\V1\Returns\V1ReturnsSettingsUtilizationHistoryResponse;
use PhpSoftBox\Ozon\Dto\V1\Returns\V1ReturnsSettingsUtilizationInfoResponse;
use PhpSoftBox\Ozon\Dto\V1\Review\ReviewAPICommentDeleteResponse;
use PhpSoftBox\Ozon\Dto\V1\Review\ReviewAPIReviewChangeStatusResponse;
use PhpSoftBox\Ozon\Dto\V1\Review\V1CommentCreateResponse;
use PhpSoftBox\Ozon\Dto\V1\Review\V1CommentListResponse;
use PhpSoftBox\Ozon\Dto\V1\Review\V1ReviewCountResponse;
use PhpSoftBox\Ozon\Dto\V1\Review\V1ReviewInfoResponse;
use PhpSoftBox\Ozon\Dto\V1\Review\V1ReviewListResponse;
use PhpSoftBox\Ozon\Dto\V1\Roles\V1RolesByTokenResponse;
use PhpSoftBox\Ozon\Dto\V1\SearchQueries\V1SearchQueriesTextResponse;
use PhpSoftBox\Ozon\Dto\V1\SearchQueries\V1SearchQueriesTopResponse;
use PhpSoftBox\Ozon\Dto\V1\Seller\V1SellerInfoResponse;
use PhpSoftBox\Ozon\Dto\V1\Seller\V1SellerOzonLogisticsInfoResponse;
use PhpSoftBox\Ozon\Dto\V1\SellerActions\SellerActionsArchiveResponse;
use PhpSoftBox\Ozon\Dto\V1\SellerActions\SellerActionsChangeActivityResponse;
use PhpSoftBox\Ozon\Dto\V1\SellerActions\SellerActionsProductsAddResponse;
use PhpSoftBox\Ozon\Dto\V1\SellerActions\SellerActionsProductsDeleteResponse;
use PhpSoftBox\Ozon\Dto\V1\SellerActions\SellerActionsUpdateDiscountResponse;
use PhpSoftBox\Ozon\Dto\V1\SellerActions\SellerActionsUpdateDiscountWithConditionResponse;
use PhpSoftBox\Ozon\Dto\V1\SellerActions\SellerActionsUpdateInstallmentResponse;
use PhpSoftBox\Ozon\Dto\V1\SellerActions\SellerActionsUpdateMultiLevelDiscountResponse;
use PhpSoftBox\Ozon\Dto\V1\SellerActions\SellerActionsUpdateOzonCardDiscountResponse;
use PhpSoftBox\Ozon\Dto\V1\SellerActions\SellerActionsUpdateVoucherResponse;
use PhpSoftBox\Ozon\Dto\V1\SellerActions\V1SellerActionsCreateDiscountResponse;
use PhpSoftBox\Ozon\Dto\V1\SellerActions\V1SellerActionsCreateDiscountWithConditionResponse;
use PhpSoftBox\Ozon\Dto\V1\SellerActions\V1SellerActionsCreateInstallmentResponse;
use PhpSoftBox\Ozon\Dto\V1\SellerActions\V1SellerActionsCreateMultiLevelDiscountResponse;
use PhpSoftBox\Ozon\Dto\V1\SellerActions\V1SellerActionsCreateOzonCardDiscountResponse;
use PhpSoftBox\Ozon\Dto\V1\SellerActions\V1SellerActionsCreateVoucherResponse;
use PhpSoftBox\Ozon\Dto\V1\SellerActions\V1SellerActionsListResponse;
use PhpSoftBox\Ozon\Dto\V1\SellerActions\V1SellerActionsProductsCandidatesResponse;
use PhpSoftBox\Ozon\Dto\V1\SellerActions\V1SellerActionsProductsListResponse;
use PhpSoftBox\Ozon\Dto\V1\SellerActions\V1SellerActionsVoucherGetResponse;
use PhpSoftBox\Ozon\Dto\V1\Supplier\V1SupplierAvailableWarehousesResponse;
use PhpSoftBox\Ozon\Dto\V1\SupplyOrder\V1GetSupplyOrderBundleResponse;
use PhpSoftBox\Ozon\Dto\V1\SupplyOrder\V1GetSupplyOrderTimeslotsResponse;
use PhpSoftBox\Ozon\Dto\V1\SupplyOrder\V1GetSupplyOrderTimeslotStatusResponse;
use PhpSoftBox\Ozon\Dto\V1\SupplyOrder\V1SupplyOrderCancelResponse;
use PhpSoftBox\Ozon\Dto\V1\SupplyOrder\V1SupplyOrderCancelStatusResponse;
use PhpSoftBox\Ozon\Dto\V1\SupplyOrder\V1SupplyOrderContentUpdateResponse;
use PhpSoftBox\Ozon\Dto\V1\SupplyOrder\V1SupplyOrderContentUpdateStatusResponse;
use PhpSoftBox\Ozon\Dto\V1\SupplyOrder\V1SupplyOrderContentUpdateValidationResponse;
use PhpSoftBox\Ozon\Dto\V1\SupplyOrder\V1SupplyOrderDetailsResponse;
use PhpSoftBox\Ozon\Dto\V1\SupplyOrder\V1SupplyOrderPassCreateResponse;
use PhpSoftBox\Ozon\Dto\V1\SupplyOrder\V1SupplyOrderPassStatusResponse;
use PhpSoftBox\Ozon\Dto\V1\SupplyOrder\V1SupplyOrderStatusCounterResponse;
use PhpSoftBox\Ozon\Dto\V1\SupplyOrder\V1UpdateSupplyOrderTimeslotResponse;
use PhpSoftBox\Ozon\Dto\V1\Warehouse\V1ArchiveWarehouseFBSResponse;
use PhpSoftBox\Ozon\Dto\V1\Warehouse\V1GetWarehouseFBSOperationStatusResponse;
use PhpSoftBox\Ozon\Dto\V1\Warehouse\V1UnarchiveWarehouseFBSResponse;
use PhpSoftBox\Ozon\Dto\V1\Warehouse\V1WarehouseInvalidProductsGetResponse;
use PhpSoftBox\Ozon\Dto\V1\Warehouse\V1WarehouseOZONListResponse;
use PhpSoftBox\Ozon\Dto\V1\Warehouse\V1WarehouseWithInvalidProductsResponse;
use PhpSoftBox\Ozon\Dto\V1\Warehouse\WarehouseWarehouseListResponse;
use PhpSoftBox\Ozon\Dto\V1\WarehouseErfbs\V1WarehouseERFBSAggregatorCreateResponse;
use PhpSoftBox\Ozon\Dto\V1\WarehouseErfbs\V1WarehouseERFBSAggregatorDeliveryMethodUpdateResponse;
use PhpSoftBox\Ozon\Dto\V1\WarehouseErfbs\V1WarehouseERFBSNonIntegratedCreateResponse;
use PhpSoftBox\Ozon\Dto\V1\WarehouseErfbs\V1WarehouseERFBSNonIntegratedDeliveryMethodUpdateResponse;
use PhpSoftBox\Ozon\Dto\V1\WarehouseErfbs\V1WarehouseERFBSUpdateResponse;
use PhpSoftBox\Ozon\Dto\V1\WarehouseFbo\V1DraftGetWarehouseFboListResponse;
use PhpSoftBox\Ozon\Dto\V1\WarehouseFbo\V1WarehouseFboSellerListResponse;
use PhpSoftBox\Ozon\Dto\V1\WarehouseFbs\V1CreateWarehouseFBSResponse;
use PhpSoftBox\Ozon\Dto\V1\WarehouseFbs\V1ListDropOffPointsForCreateFBSWarehouseResponse;
use PhpSoftBox\Ozon\Dto\V1\WarehouseFbs\V1ListDropOffPointsForUpdateFBSWarehouseResponse;
use PhpSoftBox\Ozon\Dto\V1\WarehouseFbs\V1UpdateWarehouseFBSFirstMileResponse;
use PhpSoftBox\Ozon\Dto\V1\WarehouseFbs\V1UpdateWarehouseFBSResponse;
use PhpSoftBox\Ozon\Dto\V1\WarehouseFbs\V1WarehouseFbsCreateDropOffTimeslotListResponse;
use PhpSoftBox\Ozon\Dto\V1\WarehouseFbs\V1WarehouseFbsCreatePickUpTimeslotListResponse;
use PhpSoftBox\Ozon\Dto\V1\WarehouseFbs\V1WarehouseFBSCreateReturnPointListResponse;
use PhpSoftBox\Ozon\Dto\V1\WarehouseFbs\V1WarehouseFbsPickUpHistoryListResponse;
use PhpSoftBox\Ozon\Dto\V1\WarehouseFbs\V1WarehouseFbsPickUpPlanningListResponse;
use PhpSoftBox\Ozon\Dto\V1\WarehouseFbs\V1WarehouseFbsReturnMileCheckResponse;
use PhpSoftBox\Ozon\Dto\V1\WarehouseFbs\V1WarehouseFBSReturnMileInfoResponse;
use PhpSoftBox\Ozon\Dto\V1\WarehouseFbs\V1WarehouseFbsUpdateDropOffTimeslotListResponse;
use PhpSoftBox\Ozon\Dto\V1\WarehouseFbs\V1WarehouseFbsUpdatePickUpTimeslotListResponse;
use PhpSoftBox\Ozon\Dto\V1\WarehouseFbs\V1WarehouseFBSUpdateReturnPointListResponse;
use PhpSoftBox\Ozon\Dto\V1\WarehouseFbs\WarehouseFbsPickUpCourierCancelResponse;
use PhpSoftBox\Ozon\Dto\V1\WarehouseFbs\WarehouseFbsPickUpCourierCreateResponse;
use PhpSoftBox\Ozon\Dto\V1\WarehouseRfbs\WarehouseV1WarehouseRfbsPauseResponse;
use PhpSoftBox\Ozon\Dto\V1\WarehouseRfbs\WarehouseV1WarehouseRfbsUnpauseResponse;
use PhpSoftBox\Ozon\Dto\V2\Actions\V2GetDiscountTaskListV2Response;
use PhpSoftBox\Ozon\Dto\V2\Analytics\AnalyticsStockOnWarehouseResponse;
use PhpSoftBox\Ozon\Dto\V2\Cargoes\V2CargoesCreateInfoV2Response;
use PhpSoftBox\Ozon\Dto\V2\Carriage\V2CarriageDeliveryListV2Response;
use PhpSoftBox\Ozon\Dto\V2\Chat\V2ChatListResponse;
use PhpSoftBox\Ozon\Dto\V2\Chat\V2ChatReadResponse;
use PhpSoftBox\Ozon\Dto\V2\Cluster\V2DraftClusterListResponse;
use PhpSoftBox\Ozon\Dto\V2\ConditionalCancellation\CancellationAPIConditionalCancellationApproveV2Response;
use PhpSoftBox\Ozon\Dto\V2\ConditionalCancellation\CancellationAPIConditionalCancellationRejectV2Response;
use PhpSoftBox\Ozon\Dto\V2\ConditionalCancellation\V2GetConditionalCancellationListV2Response;
use PhpSoftBox\Ozon\Dto\V2\Delivery\V1DeliveryCheckoutResponse;
use PhpSoftBox\Ozon\Dto\V2\DeliveryMethod\V2DeliveryMethodListV2Response;
use PhpSoftBox\Ozon\Dto\V2\Draft\V2DraftCreateInfoResponse;
use PhpSoftBox\Ozon\Dto\V2\Draft\V2DraftSupplyCreateResponse;
use PhpSoftBox\Ozon\Dto\V2\Draft\V2DraftSupplyCreateStatusResponse;
use PhpSoftBox\Ozon\Dto\V2\Draft\V2DraftTimeslotInfoResponse;
use PhpSoftBox\Ozon\Dto\V2\FbsPosting\PostingFbsPostingMoveStatusResponse;
use PhpSoftBox\Ozon\Dto\V2\Finance\V2GetRealizationReportResponseV2;
use PhpSoftBox\Ozon\Dto\V2\Invoice\V2InvoiceCreateOrUpdateV2Response;
use PhpSoftBox\Ozon\Dto\V2\Invoice\V2InvoiceGetV2Response;
use PhpSoftBox\Ozon\Dto\V2\Order\V1OrderCreateResponse;
use PhpSoftBox\Ozon\Dto\V2\Polygon\PolygonBindResponse;
use PhpSoftBox\Ozon\Dto\V2\PostingFbo\V2FboPostingListResponse;
use PhpSoftBox\Ozon\Dto\V2\PostingFbo\V2FboPostingResponse;
use PhpSoftBox\Ozon\Dto\V2\PostingFbs\PostingAPIPostingFBSActGetContainerLabelsResponse;
use PhpSoftBox\Ozon\Dto\V2\PostingFbs\PostingAPIPostingFBSGetActResponse;
use PhpSoftBox\Ozon\Dto\V2\PostingFbs\PostingAPIPostingFBSGetBarcodeResponse;
use PhpSoftBox\Ozon\Dto\V2\PostingFbs\PostingAPIPostingFBSGetDigitalActResponse;
use PhpSoftBox\Ozon\Dto\V2\PostingFbs\PostingAPIPostingFBSPackageLabelResponse;
use PhpSoftBox\Ozon\Dto\V2\PostingFbs\PostingBooleanResponse;
use PhpSoftBox\Ozon\Dto\V2\PostingFbs\PostingCancelReasonListResponse;
use PhpSoftBox\Ozon\Dto\V2\PostingFbs\PostingPostingFBSActCheckStatusResponse;
use PhpSoftBox\Ozon\Dto\V2\PostingFbs\PostingPostingFBSActCreateResponse;
use PhpSoftBox\Ozon\Dto\V2\PostingFbs\PostingPostingProductCancelResponse;
use PhpSoftBox\Ozon\Dto\V2\PostingFbs\V2CreateLabelBatchResponse;
use PhpSoftBox\Ozon\Dto\V2\PostingFbs\V2FbsPostingProductCountryListResponse;
use PhpSoftBox\Ozon\Dto\V2\PostingFbs\V2FbsPostingProductCountrySetResponse;
use PhpSoftBox\Ozon\Dto\V2\PostingFbs\V2FbsPostingResponse;
use PhpSoftBox\Ozon\Dto\V2\PostingFbs\V2PostingFBSActGetPostingsResponse;
use PhpSoftBox\Ozon\Dto\V2\PostingFbs\V2PostingFBSActListResponse;
use PhpSoftBox\Ozon\Dto\V2\PostingFbs\V2PostingFBSDigitalActCheckStatusResponse;
use PhpSoftBox\Ozon\Dto\V2\PostingFbs\V2PostingFBSGetBarcodeTextResponse;
use PhpSoftBox\Ozon\Dto\V2\Product\V2ProductCertificationListResponse;
use PhpSoftBox\Ozon\Dto\V2\ProductCertificate\V2ProductCertificateAccordanceTypesResponse;
use PhpSoftBox\Ozon\Dto\V2\ProductInfo\V2GetProductInfoStocksByWarehouseFbsResponseV2;
use PhpSoftBox\Ozon\Dto\V2\ProductPictures\V2ProductInfoPicturesResponse;
use PhpSoftBox\Ozon\Dto\V2\Products\Productv2DeleteProductsResponse;
use PhpSoftBox\Ozon\Dto\V2\Products\Productv2ProductsStocksResponse;
use PhpSoftBox\Ozon\Dto\V2\Report\V2ReportReturnsCreateResponse;
use PhpSoftBox\Ozon\Dto\V2\Returns\V2ReturnsRfbsGetResponse;
use PhpSoftBox\Ozon\Dto\V2\Returns\V2ReturnsRfbsListResponse;
use PhpSoftBox\Ozon\Dto\V2\Warehouse\V2WarehouseListV2Response;
use PhpSoftBox\Ozon\Dto\V3\Chat\V3ChatHistoryResponse;
use PhpSoftBox\Ozon\Dto\V3\Chat\V3ChatListResponse;
use PhpSoftBox\Ozon\Dto\V3\Finance\Financev3FinanceTransactionListV3Response;
use PhpSoftBox\Ozon\Dto\V3\Finance\Financev3FinanceTransactionTotalsV3Response;
use PhpSoftBox\Ozon\Dto\V3\PostingFbs\Postingv3GetFbsPostingUnfulfilledListResponse;
use PhpSoftBox\Ozon\Dto\V3\PostingFbs\V3GetFbsPostingListResponseV3;
use PhpSoftBox\Ozon\Dto\V3\PostingFbs\V3GetFbsPostingResponseV3;
use PhpSoftBox\Ozon\Dto\V3\PostingMultiboxqty\Postingv3PostingMultiBoxQtySetV3Response;
use PhpSoftBox\Ozon\Dto\V3\Product\Productv3GetProductListResponse;
use PhpSoftBox\Ozon\Dto\V3\Product\V3ImportProductsResponse;
use PhpSoftBox\Ozon\Dto\V3\ProductInfo\V3GetProductInfoListResponse;
use PhpSoftBox\Ozon\Dto\V3\SupplyOrder\V3SupplyOrderGetResponse;
use PhpSoftBox\Ozon\Dto\V3\SupplyOrder\V3SupplyOrderListResponse;
use PhpSoftBox\Ozon\Dto\V4\PostingFbs\Fbsv4FbsPostingShipV4Response;
use PhpSoftBox\Ozon\Dto\V4\PostingFbs\V4FbsPostingShipPackageV4Response;
use PhpSoftBox\Ozon\Dto\V4\ProductInfo\Productv4GetProductAttributesV4Response;
use PhpSoftBox\Ozon\Dto\V4\ProductInfo\V4GetProductInfoStocksResponse;
use PhpSoftBox\Ozon\Dto\V4\ProductInfo\V4GetUploadQuotaResponse;
use PhpSoftBox\Ozon\Dto\V5\Posting\FbsPostingProductExemplarStatusV5Response;
use PhpSoftBox\Ozon\Dto\V5\Posting\FbsPostingProductExemplarValidateV5Response;
use PhpSoftBox\Ozon\Dto\V5\Product\GetProductInfoPricesV5Response;
use PhpSoftBox\Ozon\Dto\V6\FbsPosting\PostingAPIFbsPostingProductExemplarSetV6Response;
use PhpSoftBox\Ozon\Dto\V6\FbsPosting\V6FbsPostingProductExemplarCreateOrGetV6Response;

use function preg_replace;
use function strtoupper;
use function trim;

final class OzonResponseDtoMap
{
    /**
     * @var array<string, class-string<OzonDtoInterface>>
     */
    private const MAP = [
        'GET /v1/actions'                                                => SellerApiGetSellerActionsV1Response::class,
        'GET /v1/cargoes-label/file/{file_guid}'                         => CargoesAPICargoesLabelFileResponse::class,
        'GET /v1/product/certificate/accordance-types'                   => ProductProductCertificateAccordanceTypesResponse::class,
        'GET /v1/product/certificate/types'                              => ProductProductCertificateTypesResponse::class,
        'GET /v1/supplier/available_warehouses'                          => V1SupplierAvailableWarehousesResponse::class,
        'GET /v2/product/certificate/accordance-types/list'              => V2ProductCertificateAccordanceTypesResponse::class,
        'POST /v1/actions/candidates'                                    => SellerApiGetSellerProductV1Response::class,
        'POST /v1/actions/discounts-task/approve'                        => V1ApproveDeclineDiscountTasksResponse::class,
        'POST /v1/actions/discounts-task/decline'                        => V1ApproveDeclineDiscountTasksResponse::class,
        'POST /v1/actions/discounts-task/list'                           => V1GetDiscountTaskListResponse::class,
        'POST /v1/actions/products'                                      => SellerApiGetSellerProductV1Response::class,
        'POST /v1/actions/products/activate'                             => SellerApiProductV1Response::class,
        'POST /v1/actions/products/deactivate'                           => SellerApiProductV1ResponseDeactivate::class,
        'POST /v1/analytics/average-delivery-time'                       => V1AverageDeliveryTimeResponse::class,
        'POST /v1/analytics/average-delivery-time/details'               => V1AverageDeliveryTimeDetailsResponse::class,
        'POST /v1/analytics/average-delivery-time/summary'               => V1AverageDeliveryTimeSummaryResponse::class,
        'POST /v1/analytics/data'                                        => AnalyticsAnalyticsGetDataResponse::class,
        'POST /v1/analytics/manage/stocks'                               => V1AnalyticsManageStocksResponse::class,
        'POST /v1/analytics/product-queries'                             => V1AnalyticsProductQueriesResponse::class,
        'POST /v1/analytics/product-queries/details'                     => V1AnalyticsProductQueriesDetailsResponse::class,
        'POST /v1/analytics/stocks'                                      => V1AnalyticsStocksResponse::class,
        'POST /v1/analytics/turnover/stocks'                             => V1AnalyticsTurnoverStocksResponse::class,
        'POST /v1/assembly/carriage/posting/list'                        => V1AssemblyCarriagePostingListResponse::class,
        'POST /v1/assembly/carriage/product/list'                        => V1AssemblyCarriageProductListResponse::class,
        'POST /v1/assembly/fbs/posting/list'                             => V1AssemblyFbsPostingListResponse::class,
        'POST /v1/assembly/fbs/product/list'                             => V1AssemblyFbsProductListResponse::class,
        'POST /v1/barcode/add'                                           => V1AddBarcodeResponse::class,
        'POST /v1/barcode/generate'                                      => V1GenerateBarcodeResponse::class,
        'POST /v1/brand/company-certification/list'                      => BrandBrandCompanyCertificationListResponse::class,
        'POST /v1/cancel-reason/list'                                    => V1CancelReasonListResponse::class,
        'POST /v1/cancel-reason/list-by-order'                           => V1CancelReasonListByOrderResponse::class,
        'POST /v1/cancel-reason/list-by-posting'                         => V1CancelReasonListByPostingResponse::class,
        'POST /v1/cargoes-label/create'                                  => V1CargoesLabelCreateResponse::class,
        'POST /v1/cargoes-label/get'                                     => V1CargoesLabelGetResponse::class,
        'POST /v1/cargoes/create'                                        => V1CargoesCreateResponse::class,
        'POST /v1/cargoes/create/info'                                   => V1CargoesCreateInfoResponse::class,
        'POST /v1/cargoes/delete'                                        => V1CargoesDeleteResponse::class,
        'POST /v1/cargoes/delete/status'                                 => V1CargoesDeleteStatusResponse::class,
        'POST /v1/cargoes/get'                                           => V1CargoesGetResponse::class,
        'POST /v1/cargoes/rules/get'                                     => V1CargoesRulesGetResponse::class,
        'POST /v1/carriage/act-discrepancy/pdf'                          => V1CarriageActDiscrepancyPDFResponse::class,
        'POST /v1/carriage/approve'                                      => V1CarriageApproveResponse::class,
        'POST /v1/carriage/cancel'                                       => V1CarriageCancelResponse::class,
        'POST /v1/carriage/create'                                       => V1CarriageCreateResponse::class,
        'POST /v1/carriage/delivery/list'                                => V1CarriageDeliveryListResponse::class,
        'POST /v1/carriage/ettn/status'                                  => V1CarriageEttnStatusResponse::class,
        'POST /v1/carriage/get'                                          => CarriageCarriageGetResponse::class,
        'POST /v1/carriage/pass/create'                                  => SellerSellerAPIArrivalPassCreateResponse::class,
        'POST /v1/carriage/pass/delete'                                  => CarriagePassDeleteResponse::class,
        'POST /v1/carriage/pass/update'                                  => CarriagePassUpdateResponse::class,
        'POST /v1/carriage/set-postings'                                 => V1SetPostingsResponse::class,
        'POST /v1/chat/send/file'                                        => ChatChatSendFileResponse::class,
        'POST /v1/chat/send/message'                                     => ChatChatSendMessageResponse::class,
        'POST /v1/chat/start'                                            => ChatChatStartResponse::class,
        'POST /v1/cluster/list'                                          => V1DraftClusterListResponse::class,
        'POST /v1/delivery-method/list'                                  => WarehouseDeliveryMethodListResponse::class,
        'POST /v1/delivery-method/return/settings/get'                   => V1GetDeliveryMethodReturnSettingsV1Response::class,
        'POST /v1/delivery/check'                                        => V1DeliveryCheckResponse::class,
        'POST /v1/delivery/map'                                          => V1DeliveryMapResponse::class,
        'POST /v1/delivery/point/info'                                   => V1DeliveryPointInfoResponse::class,
        'POST /v1/delivery/point/list'                                   => V1DeliveryPointListResponse::class,
        'POST /v1/description-category/attribute'                        => V1GetAttributesResponse::class,
        'POST /v1/description-category/attribute/values'                 => V1GetAttributeValuesResponse::class,
        'POST /v1/description-category/attribute/values/search'          => V1SearchAttributeValuesResponse::class,
        'POST /v1/description-category/tree'                             => V1GetTreeResponse::class,
        'POST /v1/draft/create'                                          => V1DraftCreateResponse::class,
        'POST /v1/draft/create/info'                                     => V1DraftCreateInfoResponse::class,
        'POST /v1/draft/crossdock/create'                                => V1DraftCreateCommonResponse::class,
        'POST /v1/draft/direct/create'                                   => V1DraftCreateCommonResponse::class,
        'POST /v1/draft/multi-cluster/create'                            => V1DraftCreateCommonResponse::class,
        'POST /v1/draft/supply/create'                                   => V1DraftSupplyCreateResponse::class,
        'POST /v1/draft/supply/create/status'                            => V1DraftSupplyCreateStatusResponse::class,
        'POST /v1/draft/timeslot/info'                                   => V1DraftTimeslotInfoResponse::class,
        'POST /v1/fbp/act-from/create'                                   => V1FbpCreateActResponse::class,
        'POST /v1/fbp/act-from/get'                                      => V1FbpCheckActStateResponse::class,
        'POST /v1/fbp/act-to/create'                                     => V1FbpCreateConsignmentNoteResponse::class,
        'POST /v1/fbp/act-to/get'                                        => V1FbpCheckConsignmentNoteStateResponse::class,
        'POST /v1/fbp/archive/get'                                       => V1FbpArchiveGetResponse::class,
        'POST /v1/fbp/archive/list'                                      => V1FbpArchiveListResponse::class,
        'POST /v1/fbp/draft/direct/create'                               => V1FbpDraftDirectCreateResponse::class,
        'POST /v1/fbp/draft/direct/delete'                               => V1FbpDraftDirectDeleteResponse::class,
        'POST /v1/fbp/draft/direct/product/validate'                     => V1FbpDraftDirectProductValidateResponse::class,
        'POST /v1/fbp/draft/direct/registrate'                           => V1FbpDraftDirectRegistrateResponse::class,
        'POST /v1/fbp/draft/direct/seller-dlv/create'                    => V1FbpDraftDirectSellerDlvCreateResponse::class,
        'POST /v1/fbp/draft/direct/seller-dlv/edit'                      => V1FbpDraftDirectSellerDlvEditResponse::class,
        'POST /v1/fbp/draft/direct/timeslot/edit'                        => V1FbpDraftDirectTimeslotEditResponse::class,
        'POST /v1/fbp/draft/direct/timeslot/get'                         => V1FbpDraftDirectGetTimeslotResponse::class,
        'POST /v1/fbp/draft/direct/tpl-dlv/create'                       => V1FbpDraftDirectTplDlvCreateResponse::class,
        'POST /v1/fbp/draft/direct/tpl-dlv/edit'                         => V1FbpDraftDirectTplDlvEditResponse::class,
        'POST /v1/fbp/draft/drop-off/create'                             => V1FbpDraftDropOffCreateResponse::class,
        'POST /v1/fbp/draft/drop-off/delete'                             => V1FbpDraftDropOffDeleteResponse::class,
        'POST /v1/fbp/draft/drop-off/dlv/edit'                           => V1FbpDraftDropOffDlvEditResponse::class,
        'POST /v1/fbp/draft/drop-off/point/list'                         => V1FbpDraftDropOffPointListResponse::class,
        'POST /v1/fbp/draft/drop-off/point/timetable'                    => V1FbpDraftDropOffPointTimetableResponse::class,
        'POST /v1/fbp/draft/drop-off/product/validate'                   => V1FbpDraftDropOffProductValidateResponse::class,
        'POST /v1/fbp/draft/drop-off/province/list'                      => V1FbpDraftDropOffProvinceListResponse::class,
        'POST /v1/fbp/draft/drop-off/registrate'                         => V1FbpDraftDropOffRegistrateResponse::class,
        'POST /v1/fbp/draft/get'                                         => V1FbpDraftGetResponse::class,
        'POST /v1/fbp/draft/list'                                        => V1FbpDraftListResponse::class,
        'POST /v1/fbp/draft/pick-up/create'                              => V1FbpDraftPickupCreateResponse::class,
        'POST /v1/fbp/draft/pick-up/delete'                              => V1FbpDraftPickUpDeleteResponse::class,
        'POST /v1/fbp/draft/pick-up/dlv/edit'                            => V1FbpDraftPickupDlvEditResponse::class,
        'POST /v1/fbp/draft/pick-up/product/validate'                    => V1FbpDraftPickUpProductValidateResponse::class,
        'POST /v1/fbp/draft/pick-up/registrate'                          => V1FbpDraftPickUpRegistrateResponse::class,
        'POST /v1/fbp/label/create'                                      => V1FbpCreateLabelResponse::class,
        'POST /v1/fbp/label/get'                                         => V1FbpGetLabelResponse::class,
        'POST /v1/fbp/order/direct/cancel'                               => V1FbpOrderDirectCancelResponse::class,
        'POST /v1/fbp/order/direct/seller-dlv/edit'                      => V1FbpOrderDirectSellerDlvEditResponse::class,
        'POST /v1/fbp/order/direct/timeslot/edit'                        => V1FbpEditTimeslotResponse::class,
        'POST /v1/fbp/order/direct/timeslot/list'                        => V1FbpAvailableTimeslotListResponse::class,
        'POST /v1/fbp/order/drop-off/cancel'                             => V1FbpOrderDropOffCancelResponse::class,
        'POST /v1/fbp/order/drop-off/dlv/edit'                           => V1FbpOrderDropOffDlvEditResponse::class,
        'POST /v1/fbp/order/drop-off/timetable'                          => V1FbpOrderDropOffTimetableResponse::class,
        'POST /v1/fbp/order/get'                                         => V1FbpOrderGetResponse::class,
        'POST /v1/fbp/order/list'                                        => V1FbpOrderListResponse::class,
        'POST /v1/fbp/order/pick-up/cancel'                              => V1FbpOrderPickUpCancelResponse::class,
        'POST /v1/fbp/order/pick-up/dlv/edit'                            => V1FbpOrderPickUpDlvEditResponse::class,
        'POST /v1/fbp/warehouse/list'                                    => V1FbpWarehouseListResponse::class,
        'POST /v1/fbs/posting/product/exemplar/update'                   => PostingAPIFbsPostingProductExemplarUpdateResponse::class,
        'POST /v1/finance/balance'                                       => V1GetFinanceBalanceV1Response::class,
        'POST /v1/finance/cash-flow-statement/list'                      => V3FinanceCashFlowStatementListResponse::class,
        'POST /v1/finance/compensation'                                  => CreateReportResponse::class,
        'POST /v1/finance/decompensation'                                => CreateReportResponse::class,
        'POST /v1/finance/document-b2b-sales'                            => CommonCreateReportResponse::class,
        'POST /v1/finance/document-b2b-sales/json'                       => V1CreateDocumentB2BSalesJSONReportResponse::class,
        'POST /v1/finance/mutual-settlement'                             => CommonCreateReportResponse::class,
        'POST /v1/finance/products/buyout'                               => V1GetFinanceProductsBuyoutResponse::class,
        'POST /v1/finance/realization/by-day'                            => GetRealizationReportByDayResponse::class,
        'POST /v1/finance/realization/posting'                           => V1GetRealizationReportPostingResponse::class,
        'POST /v1/invoice/delete'                                        => V1InvoiceDeleteResponse::class,
        'POST /v1/invoice/file/upload'                                   => V1InvoiceFileUploadResponse::class,
        'POST /v1/notification/check'                                    => NotificationV1CheckNotificationResponse::class,
        'POST /v1/notification/delete'                                   => DeleteNotificationResponse::class,
        'POST /v1/notification/enable'                                   => EnableNotificationResponse::class,
        'POST /v1/notification/list'                                     => NotificationV1NotificationListResponse::class,
        'POST /v1/notification/push-type/list'                           => NotificationV1GetNotificationPushTypeListResponse::class,
        'POST /v1/notification/set'                                      => SetNotificationResponse::class,
        'POST /v1/notification/update'                                   => UpdateNotificationResponse::class,
        'POST /v1/order/cancel'                                          => V1OrderCancelResponse::class,
        'POST /v1/order/cancel/check'                                    => V1OrderCancelCheckResponse::class,
        'POST /v1/order/cancel/status'                                   => V1OrderCancelStatusResponse::class,
        'POST /v1/pass/list'                                             => ArrivalpassArrivalPassListResponse::class,
        'POST /v1/polygon/bind'                                          => Polygonv1Empty::class,
        'POST /v1/polygon/create'                                        => Polygonv1PolygonCreateResponse::class,
        'POST /v1/polygon/delete'                                        => PolygonDeleteResponse::class,
        'POST /v1/polygon/list'                                          => V1PolygonListResponse::class,
        'POST /v1/polygon/time/coordinates/update'                       => PolygonTimeCoordinatesUpdateResponse::class,
        'POST /v1/polygon/time/set'                                      => PolygonTimeSetResponse::class,
        'POST /v1/posting/cancel'                                        => V1PostingCancelResponse::class,
        'POST /v1/posting/cancel/status'                                 => V1PostingCancelStatusResponse::class,
        'POST /v1/posting/carriage-available/list'                       => Postingv1GetCarriageAvailableListResponse::class,
        'POST /v1/posting/cutoff/set'                                    => V1SetPostingCutoffResponse::class,
        'POST /v1/posting/digital/codes/upload'                          => V1UploadPostingCodesResponse::class,
        'POST /v1/posting/digital/list'                                  => V1ListPostingCodesResponse::class,
        'POST /v1/posting/fbo/cancel-reason/list'                        => V1CancelReasonListResponseFbo::class,
        'POST /v1/posting/fbs/cancel-reason'                             => PostingCancelReasonResponse::class,
        'POST /v1/posting/fbs/package-label/create'                      => V1CreateLabelBatchResponse::class,
        'POST /v1/posting/fbs/package-label/get'                         => V1GetLabelBatchResponse::class,
        'POST /v1/posting/fbs/pick-up-code/verify'                       => V1PostingFBSPickupCodeVerifyResponse::class,
        'POST /v1/posting/fbs/product/traceable/attribute'               => V1PostingFbsProductTraceableAttributeResponse::class,
        'POST /v1/posting/fbs/restrictions'                              => V1GetRestrictionsResponse::class,
        'POST /v1/posting/fbs/split'                                     => V1PostingFbsSplitResponse::class,
        'POST /v1/posting/fbs/timeslot/change-restrictions'              => V1PostingFbsTimeslotChangeRestrictionsResponse::class,
        'POST /v1/posting/fbs/timeslot/set'                              => V1PostingFbsTimeslotSetResponse::class,
        'POST /v1/posting/fbs/traceable/split'                           => V1PostingFbsTraceableSplitResponse::class,
        'POST /v1/posting/global/etgb'                                   => V1GetEtgbResponse::class,
        'POST /v1/posting/marks'                                         => V1PostingMarksResponse::class,
        'POST /v1/posting/unpaid-legal/product/list'                     => V1PostingUnpaidLegalProductListResponse::class,
        'POST /v1/pricing-strategy/competitors/list'                     => V1GetCompetitorsResponse::class,
        'POST /v1/pricing-strategy/create'                               => V1CreatePricingStrategyResponse::class,
        'POST /v1/pricing-strategy/delete'                               => V1\PricingStrategy\V1Empty::class,
        'POST /v1/pricing-strategy/info'                                 => V1GetStrategyResponse::class,
        'POST /v1/pricing-strategy/list'                                 => V1GetStrategyListResponse::class,
        'POST /v1/pricing-strategy/product/info'                         => V1GetStrategyItemInfoResponse::class,
        'POST /v1/pricing-strategy/products/add'                         => V1AddStrategyItemsResponse::class,
        'POST /v1/pricing-strategy/products/delete'                      => V1DeleteStrategyItemsResponse::class,
        'POST /v1/pricing-strategy/products/list'                        => V1GetStrategyItemsResponse::class,
        'POST /v1/pricing-strategy/status'                               => V1\PricingStrategy\V1Empty::class,
        'POST /v1/pricing-strategy/strategy-ids-by-product-ids'          => V1GetStrategyIDsByItemIDsResponse::class,
        'POST /v1/pricing-strategy/update'                               => V1\PricingStrategy\V1Empty::class,
        'POST /v1/product/action/timer/status'                           => V1ProductActionTimerStatusResponse::class,
        'POST /v1/product/action/timer/update'                           => ProductAPIActionTimerUpdateResponse::class,
        'POST /v1/product/archive'                                       => ProductBooleanResponse::class,
        'POST /v1/product/attributes/update'                             => V1ProductUpdateAttributesResponse::class,
        'POST /v1/product/certificate/bind'                              => ProductBooleanResponse::class,
        'POST /v1/product/certificate/create'                            => ProductAPIProductCertificateCreateResponse::class,
        'POST /v1/product/certificate/delete'                            => V1ProductCertificateDeleteResponse::class,
        'POST /v1/product/certificate/info'                              => V1ProductCertificateInfoResponse::class,
        'POST /v1/product/certificate/list'                              => V1ProductCertificateListResponse::class,
        'POST /v1/product/certificate/product_status/list'               => V1ProductCertificateProductStatusListResponse::class,
        'POST /v1/product/certificate/products/list'                     => V1ProductCertificateProductsListResponse::class,
        'POST /v1/product/certificate/rejection_reasons/list'            => V1ProductCertificateRejectionReasonsListResponse::class,
        'POST /v1/product/certificate/status/list'                       => V1ProductCertificateStatusListResponse::class,
        'POST /v1/product/certificate/unbind'                            => V1ProductCertificateUnbindResponse::class,
        'POST /v1/product/certification/list'                            => ProductProductCertificationListResponse::class,
        'POST /v1/product/digital/stocks/import'                         => V1StocksImportResponse::class,
        'POST /v1/product/import-by-sku'                                 => ProductImportProductsBySKUResponse::class,
        'POST /v1/product/import/info'                                   => ProductGetImportProductsInfoResponse::class,
        'POST /v1/product/import/prices'                                 => ProductImportProductsPricesResponse::class,
        'POST /v1/product/info/description'                              => ProductGetProductInfoDescriptionResponse::class,
        'POST /v1/product/info/discounted'                               => V1GetProductInfoDiscountedResponse::class,
        'POST /v1/product/info/stocks-by-warehouse/fbs'                  => Productsv1GetProductInfoStocksByWarehouseFbsResponse::class,
        'POST /v1/product/info/subscription'                             => V1GetProductInfoSubscriptionResponse::class,
        'POST /v1/product/info/warehouse/stocks'                         => V1ProductInfoWarehouseStocksResponse::class,
        'POST /v1/product/info/wrong-volume'                             => V1ProductInfoWrongVolumeResponse::class,
        'POST /v1/product/pictures/import'                               => Productv1ProductInfoPicturesResponse::class,
        'POST /v1/product/placement-zone/info'                           => V1GetProductPlacementZoneInfoResponse::class,
        'POST /v1/product/prices/details'                                => V1ProductPricesDetailsResponse::class,
        'POST /v1/product/quant/info'                                    => ProductV1QuantInfoResponse::class,
        'POST /v1/product/quant/list'                                    => ProductV1QuantListResponse::class,
        'POST /v1/product/rating-by-sku'                                 => V1GetProductRatingBySkuResponse::class,
        'POST /v1/product/related-sku/get'                               => V1ProductGetRelatedSKUResponse::class,
        'POST /v1/product/stairway-discount/by-quantity/get'             => V1GetProductStairwayDiscountByQuantityResponse::class,
        'POST /v1/product/stairway-discount/by-quantity/set'             => V1SetProductStairwayDiscountByQuantityResponse::class,
        'POST /v1/product/unarchive'                                     => ProductBooleanResponse::class,
        'POST /v1/product/update/discount'                               => V1ProductUpdateDiscountResponse::class,
        'POST /v1/product/update/offer-id'                               => V1ProductUpdateOfferIdResponse::class,
        'POST /v1/product/visibility/set'                                => ProductV1ProductVisibilitySetResponse::class,
        'POST /v1/question/answer/create'                                => V1QuestionAnswerCreateResponse::class,
        'POST /v1/question/answer/delete'                                => QuestionAnswerDeleteResponse::class,
        'POST /v1/question/answer/list'                                  => V1QuestionAnswerListResponse::class,
        'POST /v1/question/change-status'                                => QuestionChangeStatusResponse::class,
        'POST /v1/question/count'                                        => V1QuestionCountResponse::class,
        'POST /v1/question/info'                                         => V1QuestionInfoResponse::class,
        'POST /v1/question/list'                                         => V1QuestionListResponse::class,
        'POST /v1/question/top-sku'                                      => V1QuestionTopSkuResponse::class,
        'POST /v1/rating/history'                                        => V1RatingHistoryV1Response::class,
        'POST /v1/rating/index/fbs/info'                                 => V1GetFBSRatingIndexInfoV1Response::class,
        'POST /v1/rating/index/fbs/posting/list'                         => V1ListFBSRatingIndexPostingsV1Response::class,
        'POST /v1/rating/summary'                                        => V1RatingSummaryV1Response::class,
        'POST /v1/receipts/get'                                          => V1GetReceiptResponse::class,
        'POST /v1/receipts/seller/list'                                  => V1ReceiptsSellerListResponse::class,
        'POST /v1/receipts/upload'                                       => V1UploadReceiptResponse::class,
        'POST /v1/removal/from-stock/list'                               => V1GetSupplierReturnsSummaryReportResponse::class,
        'POST /v1/removal/from-supply/list'                              => V1GetSupplyReturnsSummaryReportResponse::class,
        'POST /v1/report/discounted/create'                              => ReportCreateDiscountedResponse::class,
        'POST /v1/report/info'                                           => ReportReportInfoResponse::class,
        'POST /v1/report/list'                                           => ReportReportListResponse::class,
        'POST /v1/report/marked-products-sales/create'                   => CommonCreateReportResponse::class,
        'POST /v1/report/placement/by-products/create'                   => V1CreatePlacementByProductsReportResponse::class,
        'POST /v1/report/placement/by-supplies/create'                   => V1CreatePlacementBySuppliesReportResponse::class,
        'POST /v1/report/postings/create'                                => ReportCreateReportResponse::class,
        'POST /v1/report/products/create'                                => ReportCreateReportResponse::class,
        'POST /v1/report/warehouse/stock'                                => CommonCreateReportResponse::class,
        'POST /v1/return/giveout/barcode'                                => V1GiveoutGetBarcodeResponse::class,
        'POST /v1/return/giveout/barcode-reset'                          => ReturnAPIGiveoutBarcodeResetResponse::class,
        'POST /v1/return/giveout/get-pdf'                                => ReturnAPIGiveoutGetPDFResponse::class,
        'POST /v1/return/giveout/get-png'                                => ReturnAPIGiveoutGetPNGResponse::class,
        'POST /v1/return/giveout/info'                                   => V1GiveoutInfoResponse::class,
        'POST /v1/return/giveout/is-enabled'                             => V1GiveoutIsEnabledResponse::class,
        'POST /v1/return/giveout/list'                                   => V1GiveoutListResponse::class,
        'POST /v1/return/pass/create'                                    => ArrivalpassArrivalPassCreateResponse::class,
        'POST /v1/return/pass/delete'                                    => ReturnPassDeleteResponse::class,
        'POST /v1/return/pass/update'                                    => ReturnPassUpdateResponse::class,
        'POST /v1/returns/company/fbs/info'                              => V1ReturnsCompanyFbsInfoResponse::class,
        'POST /v1/returns/list'                                          => V1GetReturnsListResponse::class,
        'POST /v1/returns/rfbs/action/set'                               => ReturnsAPIReturnsRfbsActionSetResponse::class,
        'POST /v1/returns/settings/utilization/history'                  => V1ReturnsSettingsUtilizationHistoryResponse::class,
        'POST /v1/returns/settings/utilization/info'                     => V1ReturnsSettingsUtilizationInfoResponse::class,
        'POST /v1/returns/settings/utilization/update'                   => UtilizationUpdateResponse::class,
        'POST /v1/review/change-status'                                  => ReviewAPIReviewChangeStatusResponse::class,
        'POST /v1/review/comment/create'                                 => V1CommentCreateResponse::class,
        'POST /v1/review/comment/delete'                                 => ReviewAPICommentDeleteResponse::class,
        'POST /v1/review/comment/list'                                   => V1CommentListResponse::class,
        'POST /v1/review/count'                                          => V1ReviewCountResponse::class,
        'POST /v1/review/info'                                           => V1ReviewInfoResponse::class,
        'POST /v1/review/list'                                           => V1ReviewListResponse::class,
        'POST /v1/roles'                                                 => V1RolesByTokenResponse::class,
        'POST /v1/search-queries/text'                                   => V1SearchQueriesTextResponse::class,
        'POST /v1/search-queries/top'                                    => V1SearchQueriesTopResponse::class,
        'POST /v1/seller-actions/archive'                                => SellerActionsArchiveResponse::class,
        'POST /v1/seller-actions/change-activity'                        => SellerActionsChangeActivityResponse::class,
        'POST /v1/seller-actions/create/discount'                        => V1SellerActionsCreateDiscountResponse::class,
        'POST /v1/seller-actions/create/discount-with-condition'         => V1SellerActionsCreateDiscountWithConditionResponse::class,
        'POST /v1/seller-actions/create/installment'                     => V1SellerActionsCreateInstallmentResponse::class,
        'POST /v1/seller-actions/create/multi-level-discount'            => V1SellerActionsCreateMultiLevelDiscountResponse::class,
        'POST /v1/seller-actions/create/ozon-card-discount'              => V1SellerActionsCreateOzonCardDiscountResponse::class,
        'POST /v1/seller-actions/create/voucher'                         => V1SellerActionsCreateVoucherResponse::class,
        'POST /v1/seller-actions/list'                                   => V1SellerActionsListResponse::class,
        'POST /v1/seller-actions/products/add'                           => SellerActionsProductsAddResponse::class,
        'POST /v1/seller-actions/products/candidates'                    => V1SellerActionsProductsCandidatesResponse::class,
        'POST /v1/seller-actions/products/delete'                        => SellerActionsProductsDeleteResponse::class,
        'POST /v1/seller-actions/products/list'                          => V1SellerActionsProductsListResponse::class,
        'POST /v1/seller-actions/update/discount'                        => SellerActionsUpdateDiscountResponse::class,
        'POST /v1/seller-actions/update/discount-with-condition'         => SellerActionsUpdateDiscountWithConditionResponse::class,
        'POST /v1/seller-actions/update/installment'                     => SellerActionsUpdateInstallmentResponse::class,
        'POST /v1/seller-actions/update/multi-level-discount'            => SellerActionsUpdateMultiLevelDiscountResponse::class,
        'POST /v1/seller-actions/update/ozon-card-discount'              => SellerActionsUpdateOzonCardDiscountResponse::class,
        'POST /v1/seller-actions/update/voucher'                         => SellerActionsUpdateVoucherResponse::class,
        'POST /v1/seller-actions/voucher/get'                            => V1SellerActionsVoucherGetResponse::class,
        'POST /v1/seller/info'                                           => V1SellerInfoResponse::class,
        'POST /v1/seller/ozon-logistics/info'                            => V1SellerOzonLogisticsInfoResponse::class,
        'POST /v1/supply-order/bundle'                                   => V1GetSupplyOrderBundleResponse::class,
        'POST /v1/supply-order/cancel'                                   => V1SupplyOrderCancelResponse::class,
        'POST /v1/supply-order/cancel/status'                            => V1SupplyOrderCancelStatusResponse::class,
        'POST /v1/supply-order/content/update'                           => V1SupplyOrderContentUpdateResponse::class,
        'POST /v1/supply-order/content/update/status'                    => V1SupplyOrderContentUpdateStatusResponse::class,
        'POST /v1/supply-order/content/update/validation'                => V1SupplyOrderContentUpdateValidationResponse::class,
        'POST /v1/supply-order/details'                                  => V1SupplyOrderDetailsResponse::class,
        'POST /v1/supply-order/pass/create'                              => V1SupplyOrderPassCreateResponse::class,
        'POST /v1/supply-order/pass/status'                              => V1SupplyOrderPassStatusResponse::class,
        'POST /v1/supply-order/status/counter'                           => V1SupplyOrderStatusCounterResponse::class,
        'POST /v1/supply-order/timeslot/get'                             => V1GetSupplyOrderTimeslotsResponse::class,
        'POST /v1/supply-order/timeslot/status'                          => V1GetSupplyOrderTimeslotStatusResponse::class,
        'POST /v1/supply-order/timeslot/update'                          => V1UpdateSupplyOrderTimeslotResponse::class,
        'POST /v1/warehouse/archive'                                     => V1ArchiveWarehouseFBSResponse::class,
        'POST /v1/warehouse/erfbs/aggregator/create'                     => V1WarehouseERFBSAggregatorCreateResponse::class,
        'POST /v1/warehouse/erfbs/aggregator/delivery-method/update'     => V1WarehouseERFBSAggregatorDeliveryMethodUpdateResponse::class,
        'POST /v1/warehouse/erfbs/non-integrated/create'                 => V1WarehouseERFBSNonIntegratedCreateResponse::class,
        'POST /v1/warehouse/erfbs/non-integrated/delivery-method/update' => V1WarehouseERFBSNonIntegratedDeliveryMethodUpdateResponse::class,
        'POST /v1/warehouse/erfbs/update'                                => V1WarehouseERFBSUpdateResponse::class,
        'POST /v1/warehouse/fbo/list'                                    => V1DraftGetWarehouseFboListResponse::class,
        'POST /v1/warehouse/fbo/seller/list'                             => V1WarehouseFboSellerListResponse::class,
        'POST /v1/warehouse/fbs/create'                                  => V1CreateWarehouseFBSResponse::class,
        'POST /v1/warehouse/fbs/create/drop-off/list'                    => V1ListDropOffPointsForCreateFBSWarehouseResponse::class,
        'POST /v1/warehouse/fbs/create/drop-off/timeslot/list'           => V1WarehouseFbsCreateDropOffTimeslotListResponse::class,
        'POST /v1/warehouse/fbs/create/pick-up/timeslot/list'            => V1WarehouseFbsCreatePickUpTimeslotListResponse::class,
        'POST /v1/warehouse/fbs/create/return-point/list'                => V1WarehouseFBSCreateReturnPointListResponse::class,
        'POST /v1/warehouse/fbs/first-mile/update'                       => V1UpdateWarehouseFBSFirstMileResponse::class,
        'POST /v1/warehouse/fbs/pickup/courier/cancel'                   => WarehouseFbsPickUpCourierCancelResponse::class,
        'POST /v1/warehouse/fbs/pickup/courier/create'                   => WarehouseFbsPickUpCourierCreateResponse::class,
        'POST /v1/warehouse/fbs/pickup/history/list'                     => V1WarehouseFbsPickUpHistoryListResponse::class,
        'POST /v1/warehouse/fbs/pickup/planning/list'                    => V1WarehouseFbsPickUpPlanningListResponse::class,
        'POST /v1/warehouse/fbs/return-mile/check'                       => V1WarehouseFbsReturnMileCheckResponse::class,
        'POST /v1/warehouse/fbs/return-mile/info'                        => V1WarehouseFBSReturnMileInfoResponse::class,
        'POST /v1/warehouse/fbs/update'                                  => V1UpdateWarehouseFBSResponse::class,
        'POST /v1/warehouse/fbs/update/drop-off/list'                    => V1ListDropOffPointsForUpdateFBSWarehouseResponse::class,
        'POST /v1/warehouse/fbs/update/drop-off/timeslot/list'           => V1WarehouseFbsUpdateDropOffTimeslotListResponse::class,
        'POST /v1/warehouse/fbs/update/pick-up/timeslot/list'            => V1WarehouseFbsUpdatePickUpTimeslotListResponse::class,
        'POST /v1/warehouse/fbs/update/return-point/list'                => V1WarehouseFBSUpdateReturnPointListResponse::class,
        'POST /v1/warehouse/invalid-products/get'                        => V1WarehouseInvalidProductsGetResponse::class,
        'POST /v1/warehouse/list'                                        => WarehouseWarehouseListResponse::class,
        'POST /v1/warehouse/operation/status'                            => V1GetWarehouseFBSOperationStatusResponse::class,
        'POST /v1/warehouse/ozon/list'                                   => V1WarehouseOZONListResponse::class,
        'POST /v1/warehouse/rfbs/pause'                                  => WarehouseV1WarehouseRfbsPauseResponse::class,
        'POST /v1/warehouse/rfbs/unpause'                                => WarehouseV1WarehouseRfbsUnpauseResponse::class,
        'POST /v1/warehouse/unarchive'                                   => V1UnarchiveWarehouseFBSResponse::class,
        'POST /v1/warehouse/warehouses-with-invalid-products'            => V1WarehouseWithInvalidProductsResponse::class,
        'POST /v2/actions/discounts-task/list'                           => V2GetDiscountTaskListV2Response::class,
        'POST /v2/analytics/stock_on_warehouses'                         => AnalyticsStockOnWarehouseResponse::class,
        'POST /v2/cargoes/create/info'                                   => V2CargoesCreateInfoV2Response::class,
        'POST /v2/carriage/delivery/list'                                => V2CarriageDeliveryListV2Response::class,
        'POST /v2/chat/list'                                             => V2ChatListResponse::class,
        'POST /v2/chat/read'                                             => V2ChatReadResponse::class,
        'POST /v2/cluster/list'                                          => V2DraftClusterListResponse::class,
        'POST /v2/conditional-cancellation/approve'                      => CancellationAPIConditionalCancellationApproveV2Response::class,
        'POST /v2/conditional-cancellation/list'                         => V2GetConditionalCancellationListV2Response::class,
        'POST /v2/conditional-cancellation/reject'                       => CancellationAPIConditionalCancellationRejectV2Response::class,
        'POST /v2/delivery-method/list'                                  => V2DeliveryMethodListV2Response::class,
        'POST /v2/delivery/checkout'                                     => V1DeliveryCheckoutResponse::class,
        'POST /v2/draft/create/info'                                     => V2DraftCreateInfoResponse::class,
        'POST /v2/draft/supply/create'                                   => V2DraftSupplyCreateResponse::class,
        'POST /v2/draft/supply/create/status'                            => V2DraftSupplyCreateStatusResponse::class,
        'POST /v2/draft/timeslot/info'                                   => V2DraftTimeslotInfoResponse::class,
        'POST /v2/fbs/posting/delivered'                                 => PostingFbsPostingMoveStatusResponse::class,
        'POST /v2/fbs/posting/delivering'                                => PostingFbsPostingMoveStatusResponse::class,
        'POST /v2/fbs/posting/last-mile'                                 => PostingFbsPostingMoveStatusResponse::class,
        'POST /v2/fbs/posting/tracking-number/set'                       => PostingFbsPostingMoveStatusResponse::class,
        'POST /v2/finance/realization'                                   => V2GetRealizationReportResponseV2::class,
        'POST /v2/invoice/create-or-update'                              => V2InvoiceCreateOrUpdateV2Response::class,
        'POST /v2/invoice/get'                                           => V2InvoiceGetV2Response::class,
        'POST /v2/order/create'                                          => V1OrderCreateResponse::class,
        'POST /v2/polygon/bind'                                          => PolygonBindResponse::class,
        'POST /v2/posting/fbo/get'                                       => V2FboPostingResponse::class,
        'POST /v2/posting/fbo/list'                                      => V2FboPostingListResponse::class,
        'POST /v2/posting/fbs/act/check-status'                          => PostingPostingFBSActCheckStatusResponse::class,
        'POST /v2/posting/fbs/act/create'                                => PostingPostingFBSActCreateResponse::class,
        'POST /v2/posting/fbs/act/get-barcode'                           => PostingAPIPostingFBSGetBarcodeResponse::class,
        'POST /v2/posting/fbs/act/get-barcode/text'                      => V2PostingFBSGetBarcodeTextResponse::class,
        'POST /v2/posting/fbs/act/get-container-labels'                  => PostingAPIPostingFBSActGetContainerLabelsResponse::class,
        'POST /v2/posting/fbs/act/get-pdf'                               => PostingAPIPostingFBSGetActResponse::class,
        'POST /v2/posting/fbs/act/get-postings'                          => V2PostingFBSActGetPostingsResponse::class,
        'POST /v2/posting/fbs/act/list'                                  => V2PostingFBSActListResponse::class,
        'POST /v2/posting/fbs/arbitration'                               => PostingBooleanResponse::class,
        'POST /v2/posting/fbs/awaiting-delivery'                         => PostingBooleanResponse::class,
        'POST /v2/posting/fbs/cancel'                                    => PostingBooleanResponse::class,
        'POST /v2/posting/fbs/cancel-reason/list'                        => PostingCancelReasonListResponse::class,
        'POST /v2/posting/fbs/digital/act/check-status'                  => V2PostingFBSDigitalActCheckStatusResponse::class,
        'POST /v2/posting/fbs/digital/act/get-pdf'                       => PostingAPIPostingFBSGetDigitalActResponse::class,
        'POST /v2/posting/fbs/get-by-barcode'                            => V2FbsPostingResponse::class,
        'POST /v2/posting/fbs/package-label'                             => PostingAPIPostingFBSPackageLabelResponse::class,
        'POST /v2/posting/fbs/package-label/create'                      => V2CreateLabelBatchResponse::class,
        'POST /v2/posting/fbs/product/cancel'                            => PostingPostingProductCancelResponse::class,
        'POST /v2/posting/fbs/product/country/list'                      => V2FbsPostingProductCountryListResponse::class,
        'POST /v2/posting/fbs/product/country/set'                       => V2FbsPostingProductCountrySetResponse::class,
        'POST /v2/product/certification/list'                            => V2ProductCertificationListResponse::class,
        'POST /v2/product/info/stocks-by-warehouse/fbs'                  => V2GetProductInfoStocksByWarehouseFbsResponseV2::class,
        'POST /v2/product/pictures/info'                                 => V2ProductInfoPicturesResponse::class,
        'POST /v2/products/delete'                                       => Productv2DeleteProductsResponse::class,
        'POST /v2/products/stocks'                                       => Productv2ProductsStocksResponse::class,
        'POST /v2/report/returns/create'                                 => V2ReportReturnsCreateResponse::class,
        'POST /v2/returns/rfbs/compensate'                               => V2\Returns\V1Empty::class,
        'POST /v2/returns/rfbs/get'                                      => V2ReturnsRfbsGetResponse::class,
        'POST /v2/returns/rfbs/list'                                     => V2ReturnsRfbsListResponse::class,
        'POST /v2/returns/rfbs/receive-return'                           => V2\Returns\V1Empty::class,
        'POST /v2/returns/rfbs/reject'                                   => V2\Returns\V1Empty::class,
        'POST /v2/returns/rfbs/return-money'                             => V2\Returns\V1Empty::class,
        'POST /v2/returns/rfbs/verify'                                   => V2\Returns\V1Empty::class,
        'POST /v2/warehouse/list'                                        => V2WarehouseListV2Response::class,
        'POST /v3/chat/history'                                          => V3ChatHistoryResponse::class,
        'POST /v3/chat/list'                                             => V3ChatListResponse::class,
        'POST /v3/finance/transaction/list'                              => Financev3FinanceTransactionListV3Response::class,
        'POST /v3/finance/transaction/totals'                            => Financev3FinanceTransactionTotalsV3Response::class,
        'POST /v3/posting/fbs/get'                                       => V3GetFbsPostingResponseV3::class,
        'POST /v3/posting/fbs/list'                                      => V3GetFbsPostingListResponseV3::class,
        'POST /v3/posting/fbs/unfulfilled/list'                          => Postingv3GetFbsPostingUnfulfilledListResponse::class,
        'POST /v3/posting/multiboxqty/set'                               => Postingv3PostingMultiBoxQtySetV3Response::class,
        'POST /v3/product/import'                                        => V3ImportProductsResponse::class,
        'POST /v3/product/info/list'                                     => V3GetProductInfoListResponse::class,
        'POST /v3/product/list'                                          => Productv3GetProductListResponse::class,
        'POST /v3/supply-order/get'                                      => V3SupplyOrderGetResponse::class,
        'POST /v3/supply-order/list'                                     => V3SupplyOrderListResponse::class,
        'POST /v4/posting/fbs/ship'                                      => Fbsv4FbsPostingShipV4Response::class,
        'POST /v4/posting/fbs/ship/package'                              => V4FbsPostingShipPackageV4Response::class,
        'POST /v4/product/info/attributes'                               => Productv4GetProductAttributesV4Response::class,
        'POST /v4/product/info/limit'                                    => V4GetUploadQuotaResponse::class,
        'POST /v4/product/info/stocks'                                   => V4GetProductInfoStocksResponse::class,
        'POST /v5/fbs/posting/product/exemplar/status'                   => FbsPostingProductExemplarStatusV5Response::class,
        'POST /v5/fbs/posting/product/exemplar/validate'                 => FbsPostingProductExemplarValidateV5Response::class,
        'POST /v5/product/info/prices'                                   => GetProductInfoPricesV5Response::class,
        'POST /v6/fbs/posting/product/exemplar/create-or-get'            => V6FbsPostingProductExemplarCreateOrGetV6Response::class,
        'POST /v6/fbs/posting/product/exemplar/set'                      => PostingAPIFbsPostingProductExemplarSetV6Response::class,
    ];

    /**
     * @return class-string<OzonDtoInterface>|null
     */
    public static function resolve(string $method, string $path): ?string
    {
        $key = strtoupper($method) . ' ' . normalizeOzonPath($path);

        return self::MAP[$key] ?? self::MAP[normalizeOzonFilePathKey($key)] ?? null;
    }
}

function normalizeOzonPath(string $path): string
{
    return '/' . trim($path, '/');
}

function normalizeOzonFilePathKey(string $key): string
{
    return preg_replace('#/[^/]+$#', '/{file_guid}', $key) ?? $key;
}
