<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\Tests;

use PhpSoftBox\Http\Message\Response;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;
use PhpSoftBox\Ozon\Dto\V2\Cargoes\CargoesV2CargoesDeleteResponseErrors;
use PhpSoftBox\Ozon\Dto\V2\Review\ReviewV2ReviewListV2Response;
use PhpSoftBox\Ozon\Dto\V2\Review\ReviewV2ReviewListV2ResponseReview;
use PhpSoftBox\Ozon\Dto\V2\Review\ReviewV2ReviewListV2ResponseReviewStatusEnum;
use PhpSoftBox\Ozon\Dto\V4\PostingFbs\PostingV4PostingFbsListResponse;
use PhpSoftBox\Ozon\Dto\V4\PostingFbs\PostingV4PostingFbsListResponsePostings;
use PhpSoftBox\Ozon\OzonApiResponse;
use PhpSoftBox\Ozon\Tests\Support\CreatesOzonClient;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\CoversMethod;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(OzonDtoValue::class)]
#[CoversClass(PostingV4PostingFbsListResponse::class)]
#[CoversClass(ReviewV2ReviewListV2Response::class)]
#[CoversMethod(OzonApiResponse::class, 'makeDto')]
final class OzonUpdatedDtoTest extends TestCase
{
    use CreatesOzonClient;

    /**
     * Проверяет вложенные DTO списка FBS v4, где Swagger задаёт items без type: array.
     *
     * @see PostingV4PostingFbsListResponse::fromArray()
     * @see OzonApiResponse::makeDto()
     */
    #[Test]
    public function fbsListHydratesNestedPostings(): void
    {
        [$client] = $this->createClient(new Response(200, [], '{"cursor":"next","has_next":true,"postings":[{"posting_number":"123-1","order_id":123,"future_field":"kept"}]}'));
        $dto      = $client->postingFbsV4()->list(['limit' => 10])->makeDto();

        self::assertInstanceOf(PostingV4PostingFbsListResponse::class, $dto);
        self::assertSame('next', $dto->cursor);
        self::assertTrue($dto->hasNext);
        self::assertCount(1, $dto->postings);
        self::assertInstanceOf(PostingV4PostingFbsListResponsePostings::class, $dto->postings[0]);
        self::assertSame('123-1', $dto->postings[0]->postingNumber);
        self::assertSame(123, $dto->postings[0]->orderId);
        self::assertSame(['future_field' => 'kept'], $dto->postings[0]->extra);
    }

    /**
     * Проверяет, что строковые enum отзывов не теряются при создании DTO по ссылке на схему.
     *
     * @see ReviewV2ReviewListV2Response::fromArray()
     * @see OzonDtoValue::scalarObject()
     */
    #[Test]
    public function reviewListPreservesScalarEnums(): void
    {
        [$client] = $this->createClient(new Response(200, [], '{"has_next":false,"reviews":[{"id":"review-1","status":"UNPROCESSED","order_status":"DELIVERED","rating":5}]}'));
        $dto      = $client->reviewV2()->list()->makeDto();

        self::assertInstanceOf(ReviewV2ReviewListV2Response::class, $dto);
        self::assertInstanceOf(ReviewV2ReviewListV2ResponseReview::class, $dto->reviews[0]);
        self::assertSame('UNPROCESSED', $dto->reviews[0]->status?->value);
        self::assertSame('DELIVERED', $dto->reviews[0]->orderStatus?->value);
        self::assertSame(5, $dto->reviews[0]->rating);
    }

    /**
     * Проверяет сохранение списка строковых кодов ошибок грузомест вместо пустого массива.
     *
     * @see CargoesV2CargoesDeleteResponseErrors::fromArray()
     * @see OzonDtoValue::scalarObjectList()
     */
    #[Test]
    public function cargoErrorsPreserveScalarEnumList(): void
    {
        $dto = CargoesV2CargoesDeleteResponseErrors::fromArray(['supply_error_reasons' => ['SUPPLY_NOT_FOUND', 'FUTURE_REASON']]);

        self::assertCount(2, $dto->supplyErrorReasons);
        self::assertSame('SUPPLY_NOT_FOUND', $dto->supplyErrorReasons[0]->value);
        self::assertSame('FUTURE_REASON', $dto->supplyErrorReasons[1]->value);
    }

    /**
     * Проверяет, что отсутствующие enum не превращаются в фиктивные значения.
     *
     * @see OzonDtoValue::scalarObject()
     * @see OzonDtoValue::scalarObjectList()
     */
    #[Test]
    public function absentScalarEnumsStayAbsent(): void
    {
        self::assertNull(OzonDtoValue::scalarObject(null, ReviewV2ReviewListV2ResponseReviewStatusEnum::class));
        self::assertSame([], OzonDtoValue::scalarObjectList(null, ReviewV2ReviewListV2ResponseReviewStatusEnum::class));
    }
}
