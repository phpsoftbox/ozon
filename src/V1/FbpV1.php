<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V1;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class FbpV1
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
    public function actFromCreate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbp/act-from')->post('/create', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function actFromGet(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbp/act-from')->post('/get', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function actToCreate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbp/act-to')->post('/create', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function actToGet(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbp/act-to')->post('/get', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function archiveGet(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbp/archive')->post('/get', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function archiveList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbp/archive')->post('/list', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function draftDirectCreate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbp/draft/direct')->post('/create', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function draftDirectDelete(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbp/draft/direct')->post('/delete', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function draftDirectProductValidate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbp/draft/direct/product')->post('/validate', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function draftDirectRegistrate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbp/draft/direct')->post('/registrate', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function draftDirectSellerDlvCreate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbp/draft/direct/seller-dlv')->post('/create', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function draftDirectSellerDlvEdit(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbp/draft/direct/seller-dlv')->post('/edit', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function draftDirectTimeslotEdit(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbp/draft/direct/timeslot')->post('/edit', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function draftDirectTimeslotGet(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbp/draft/direct/timeslot')->post('/get', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function draftDirectTplDlvCreate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbp/draft/direct/tpl-dlv')->post('/create', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function draftDirectTplDlvEdit(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbp/draft/direct/tpl-dlv')->post('/edit', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function draftDropOffCreate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbp/draft/drop-off')->post('/create', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function draftDropOffDelete(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbp/draft/drop-off')->post('/delete', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function draftDropOffDlvEdit(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbp/draft/drop-off/dlv')->post('/edit', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function draftDropOffPointList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbp/draft/drop-off/point')->post('/list', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function draftDropOffPointTimetable(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbp/draft/drop-off/point')->post('/timetable', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function draftDropOffProductValidate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbp/draft/drop-off/product')->post('/validate', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function draftDropOffProvinceList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbp/draft/drop-off/province')->post('/list', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function draftDropOffRegistrate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbp/draft/drop-off')->post('/registrate', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function draftGet(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbp/draft')->post('/get', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function draftList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbp/draft')->post('/list', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function draftPickUpCreate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbp/draft/pick-up')->post('/create', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function draftPickUpDelete(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbp/draft/pick-up')->post('/delete', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function draftPickUpDlvEdit(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbp/draft/pick-up/dlv')->post('/edit', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function draftPickUpProductValidate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbp/draft/pick-up/product')->post('/validate', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function draftPickUpRegistrate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbp/draft/pick-up')->post('/registrate', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function labelCreate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbp/label')->post('/create', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function labelGet(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbp/label')->post('/get', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function orderDirectCancel(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbp/order/direct')->post('/cancel', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function orderDirectSellerDlvEdit(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbp/order/direct/seller-dlv')->post('/edit', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function orderDirectTimeslotEdit(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbp/order/direct/timeslot')->post('/edit', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function orderDirectTimeslotList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbp/order/direct/timeslot')->post('/list', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function orderDropOffCancel(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbp/order/drop-off')->post('/cancel', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function orderDropOffDlvEdit(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbp/order/drop-off/dlv')->post('/edit', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function orderDropOffTimetable(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbp/order/drop-off')->post('/timetable', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function orderGet(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbp/order')->post('/get', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function orderList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbp/order')->post('/list', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function orderPickUpCancel(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbp/order/pick-up')->post('/cancel', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function orderPickUpDlvEdit(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbp/order/pick-up/dlv')->post('/edit', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function warehouseList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbp/warehouse')->post('/list', $payload);
    }
}
