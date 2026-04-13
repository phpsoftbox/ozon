<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V2;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class PostingFbsV2
{
    public function __construct(
        private readonly OzonApiClient $client,
    ) {
    }

    /**
     * Создание акта и транспортной накладной.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function actCreate(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('posting/fbs')->post('/act/create', $payload);
    }

    /**
     * Статус создания акта/накладной.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function actCheckStatus(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('posting/fbs')->post('/act/check-status', $payload);
    }

    /**
     * Список созданных актов.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function actList(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('posting/fbs')->post('/act/list', $payload);
    }

    /**
     * Список отправлений в акте.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function actGetPostings(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('posting/fbs')->post('/act/get-postings', $payload);
    }

    /**
     * Штрихкод акта.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function actGetBarcode(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('posting/fbs')->post('/act/get-barcode', $payload);
    }

    /**
     * Текст штрихкода акта.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function actGetBarcodeText(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('posting/fbs')->post('/act/get-barcode/text', $payload);
    }

    /**
     * PDF акта.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function actGetPdf(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('posting/fbs')->post('/act/get-pdf', $payload);
    }

    /**
     * Этикетки контейнеров для акта.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function actGetContainerLabels(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('posting/fbs')->post('/act/get-container-labels', $payload);
    }

    /**
     * Статус цифрового акта.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function digitalActCheckStatus(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('posting/fbs')->post('/digital/act/check-status', $payload);
    }

    /**
     * PDF цифрового акта.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function digitalActGetPdf(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('posting/fbs')->post('/digital/act/get-pdf', $payload);
    }

    /**
     * Отмена отправления FBS.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function cancel(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('posting/fbs')->post('/cancel', $payload);
    }

    /**
     * Список причин отмены отправления FBS.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function cancelReasons(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('posting/fbs')->post('/cancel-reason/list', $payload);
    }

    /**
     * Последняя миля для отправления.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function lastMile(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('fbs/posting')->post('/last-mile', $payload);
    }

    /**
     * Арбитраж по отправлению FBS.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function arbitration(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('posting/fbs')->post('/arbitration', $payload);
    }

    /**
     * Передача отправления в awaiting_delivery.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function awaitingDelivery(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('posting/fbs')->post('/awaiting-delivery', $payload);
    }

    /**
     * Поиск отправления FBS по штрихкоду.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function getByBarcode(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('posting/fbs')->post('/get-by-barcode', $payload);
    }

    /**
     * Печать этикеток отправлений.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function packageLabel(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('posting/fbs')->post('/package-label', $payload);
    }

    /**
     * Создание задачи на генерацию этикеток.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function packageLabelCreate(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('posting/fbs')->post('/package-label/create', $payload);
    }

    /**
     * Отмена товара в отправлении.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function productCancel(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('posting/fbs')->post('/product/cancel', $payload);
    }

    /**
     * Список стран производства для товаров отправления.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function productCountryList(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('posting/fbs')->post('/product/country/list', $payload);
    }

    /**
     * Установка страны производства.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function productCountrySet(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('posting/fbs')->post('/product/country/set', $payload);
    }

    /**
     * Передача номера отправления в доставке.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function delivering(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('fbs/posting')->post('/delivering', $payload);
    }

    /**
     * Передача номера отправления в статусе delivered.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function delivered(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('fbs/posting')->post('/delivered', $payload);
    }

    /**
     * Установка трек-номеров для отправлений.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function setTrackingNumber(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('fbs/posting/tracking-number')->post('/set', $payload);
    }

    /**
     * Универсальный метод для FBS posting API v2.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function request(string $path, array $payload = [], string $method = 'POST', array $query = []): OzonApiResponse
    {
        return $this->client->v2('posting/fbs')->request($path, $payload, $method, $query);
    }
}
