<?php

namespace App\OpenApi\Requests\Test;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *     schema="create_test_category",
 *     required={
 *         "title",
 *         "locale",
 *     },
 *     @OA\Property(
 *         property="title",
 *         type="string",
 *     ),
 *     @OA\Property(
 *         property="locale",
 *         type="string",
 *         enum={"kz", "ru", "en", "de", "es", "cn"}
 *     ),
 *  )
 */
class CreateTestCategoryRequestOA
{
}
