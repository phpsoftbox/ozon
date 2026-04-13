<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\Tests;

use PhpSoftBox\Http\Message\Response;
use PhpSoftBox\Ozon\Dto\V2\PostingFbs\PostingV2PostingFbsPackageLabelGetResponse;
use PhpSoftBox\Ozon\Dto\V3\PostingFbs\PostingV3PostingFbsPackageLabelCreateResponse;
use PhpSoftBox\Ozon\OzonApiResponse;
use PhpSoftBox\Ozon\Tests\Support\CreatesOzonClient;
use PhpSoftBox\Ozon\V2\PostingFbsV2;
use PhpSoftBox\Ozon\V3\PostingFbsV3;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\CoversMethod;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

use function file_get_contents;
use function json_decode;

use const JSON_THROW_ON_ERROR;

/**
 * Этикетки отправлений FBS: методы-замены, на которые Ozon переводит печать до 2.11.2026.
 */
#[CoversClass(PostingFbsV3::class)]
#[CoversClass(PostingFbsV2::class)]
#[CoversMethod(PostingFbsV3::class, 'packageLabelCreate')]
#[CoversMethod(PostingFbsV2::class, 'packageLabelGet')]
#[CoversMethod(OzonApiResponse::class, 'makeDto')]
final class OzonFbsPackageLabelApiTest extends TestCase
{
    use CreatesOzonClient;

    /**
     * Проверим путь v3 и тело с полем posting_numbers (у v2 поле называлось posting_number).
     *
     * @see PostingFbsV3::packageLabelCreate()
     */
    #[Test]
    public function createSendsPostingNumbersToV3(): void
    {
        [$client, $http] = $this->createClient(new Response(200, [], $this->fixture('posting-fbs-v3-package-label-create.json')));

        $client->postingFbsV3()->packageLabelCreate(['posting_numbers' => ['00100162-3625-1']]);

        $request = $http->lastRequest();
        self::assertNotNull($request);
        self::assertSame('POST', $request->getMethod());
        self::assertSame('/v3/posting/fbs/package-label/create', $request->getUri()->getPath());
        self::assertSame(
            ['posting_numbers' => ['00100162-3625-1']],
            json_decode((string) $request->getBody(), true, flags: JSON_THROW_ON_ERROR),
        );
    }

    /**
     * Проверим разбор ответа без обёртки result: задания с типом этикетки.
     *
     * @see OzonApiResponse::makeDto()
     */
    #[Test]
    public function createResponseHydratesTasks(): void
    {
        [$client] = $this->createClient(new Response(200, [], $this->fixture('posting-fbs-v3-package-label-create.json')));

        $dto = $client->postingFbsV3()->packageLabelCreate(['posting_numbers' => ['00100162-3625-1']])->makeDto();

        self::assertInstanceOf(PostingV3PostingFbsPackageLabelCreateResponse::class, $dto);
        self::assertCount(2, $dto->tasks);
        self::assertSame(123, $dto->tasks[0]->taskId);
        self::assertSame('big_label', $dto->tasks[0]->taskType);
        self::assertSame('small_label', $dto->tasks[1]->taskType);
    }

    /**
     * Проверим путь v2 и тело с task_id.
     *
     * @see PostingFbsV2::packageLabelGet()
     */
    #[Test]
    public function getSendsTaskIdToV2(): void
    {
        [$client, $http] = $this->createClient(new Response(200, [], $this->fixture('posting-fbs-v2-package-label-get.json')));

        $client->postingFbsV2()->packageLabelGet(['task_id' => 123]);

        $request = $http->lastRequest();
        self::assertNotNull($request);
        self::assertSame('POST', $request->getMethod());
        self::assertSame('/v2/posting/fbs/package-label/get', $request->getUri()->getPath());
        self::assertSame(['task_id' => 123], json_decode((string) $request->getBody(), true, flags: JSON_THROW_ON_ERROR));
    }

    /**
     * Проверим разбор ответа без обёртки result: ссылка на файл, статус и неотпечатанные отправления.
     *
     * @see OzonApiResponse::makeDto()
     */
    #[Test]
    public function getResponseHydratesStatusAndUnprintedPostings(): void
    {
        [$client] = $this->createClient(new Response(200, [], $this->fixture('posting-fbs-v2-package-label-get.json')));

        $dto = $client->postingFbsV2()->packageLabelGet(['task_id' => 123])->makeDto();

        self::assertInstanceOf(PostingV2PostingFbsPackageLabelGetResponse::class, $dto);
        self::assertSame('https://cdn.ozon.ru/labels/123.pdf', $dto->fileUrl);
        self::assertSame('completed', $dto->status?->code);
        self::assertSame(2, $dto->status?->postingsCount);
        self::assertSame(1, $dto->status?->printedPostingsCount);
        self::assertSame('00100162-3625-2', $dto->status?->unprintedPostings[0]->postingNumber);
        self::assertSame("postings aren't ready", $dto->status?->unprintedPostings[0]->message);
    }

    /**
     * Проверим, что ошибка задания доступна в поле error.
     *
     * @see OzonApiResponse::makeDto()
     */
    #[Test]
    public function getResponseExposesError(): void
    {
        [$client] = $this->createClient(new Response(200, [], '{"error":{"code":"TASK_FAILED","message":"label generation failed"}}'));

        $dto = $client->postingFbsV2()->packageLabelGet(['task_id' => 123])->makeDto();

        self::assertInstanceOf(PostingV2PostingFbsPackageLabelGetResponse::class, $dto);
        self::assertSame('TASK_FAILED', $dto->error?->code);
        self::assertSame('label generation failed', $dto->error?->message);
        self::assertNull($dto->fileUrl);
    }

    private function fixture(string $name): string
    {
        return (string) file_get_contents(__DIR__ . '/Fixtures/' . $name);
    }
}
