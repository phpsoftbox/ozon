<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V1;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class WarehouseV1
{
    public function __construct(
        private readonly OzonApiClient $client,
    ) {
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function list(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('warehouse')->post('/list', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function operationStatus(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('warehouse/operation')->post('/status', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function archive(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('warehouse')->post('/archive', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function unarchive(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('warehouse')->post('/unarchive', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function invalidProductsGet(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('warehouse/invalid-products')->post('/get', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function warehousesWithInvalidProducts(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('warehouse')->post('/warehouses-with-invalid-products', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function fboList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('warehouse/fbo')->post('/list', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function fboSellerList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('warehouse/fbo/seller')->post('/list', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function ozonList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('warehouse/ozon')->post('/list', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function rfbsPause(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('warehouse/rfbs')->post('/pause', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function rfbsUnpause(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('warehouse/rfbs')->post('/unpause', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function fbsCreateDropOffList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('warehouse/fbs/create/drop-off')->post('/list', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function fbsUpdateDropOffList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('warehouse/fbs/update/drop-off')->post('/list', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function fbsCreateDropOffTimeslotList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('warehouse/fbs/create/drop-off/timeslot')->post('/list', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function fbsUpdateDropOffTimeslotList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('warehouse/fbs/update/drop-off/timeslot')->post('/list', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function fbsCreatePickUpTimeslotList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('warehouse/fbs/create/pick-up/timeslot')->post('/list', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function fbsUpdatePickUpTimeslotList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('warehouse/fbs/update/pick-up/timeslot')->post('/list', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function fbsCreate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('warehouse/fbs')->post('/create', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function fbsUpdate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('warehouse/fbs')->post('/update', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function fbsFirstMileUpdate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('warehouse/fbs/first-mile')->post('/update', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function fbsCreateReturnPointList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('warehouse/fbs/create/return-point')->post('/list', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function fbsUpdateReturnPointList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('warehouse/fbs/update/return-point')->post('/list', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function fbsReturnMileInfo(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('warehouse/fbs/return-mile')->post('/info', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function fbsReturnMileCheck(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('warehouse/fbs/return-mile')->post('/check', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function fbsPickupCourierCreate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('warehouse/fbs/pickup/courier')->post('/create', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function fbsPickupCourierCancel(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('warehouse/fbs/pickup/courier')->post('/cancel', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function fbsPickupHistoryList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('warehouse/fbs/pickup/history')->post('/list', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function fbsPickupPlanningList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('warehouse/fbs/pickup/planning')->post('/list', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function erfbsAggregatorCreate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('warehouse/erfbs/aggregator')->post('/create', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function erfbsUpdate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('warehouse/erfbs')->post('/update', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function erfbsAggregatorDeliveryMethodUpdate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('warehouse/erfbs/aggregator/delivery-method')->post('/update', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function erfbsNonIntegratedCreate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('warehouse/erfbs/non-integrated')->post('/create', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function erfbsNonIntegratedDeliveryMethodUpdate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('warehouse/erfbs/non-integrated/delivery-method')->post('/update', $payload);
    }

    /**
     * Универсальный метод для warehouse API v1.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function request(string $path, array $payload = [], string $method = 'POST', array $query = []): OzonApiResponse
    {
        return $this->client->v1('warehouse')->request($path, $payload, $method, $query);
    }
}
