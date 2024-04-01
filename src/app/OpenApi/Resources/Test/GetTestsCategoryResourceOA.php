<?php

namespace App\OpenApi\Resources\Test;

use OpenApi\Annotations as OA;

/**
 * @OA\Response(
 *     response="create_test_category_response",
 *     description="Test category response.",
 *     @OA\JsonContent(
 *       @OA\Property(
 *          property="id",
 *          type="integer",
 *       ),
 *       @OA\Property(
 *          property="title",
 *          type="string",
 *       ),
 *       @OA\Property(
 *          property="locale",
 *          type="string",
 *          enum={"kz", "ru", "en", "de", "es", "cn"}
 *       ),
 *    ),
 *  )
 */
class GetTestsCategoryResourceOA
{
}
