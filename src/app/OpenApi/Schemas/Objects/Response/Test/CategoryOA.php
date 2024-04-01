<?php

namespace App\OpenApi\Schemas\Objects\Response\Test;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *     schema="test_category_response",
 *     required={
 *         "id",
 *         "title",
 *         "locale",
 *         "is_active",
 *     },
 *      @OA\Property(
 *           property="id",
 *           type="integer",
 *           description="order id",
 *      ),
 *     @OA\Property(
 *         property="title",
 *         type="string",
 *         description="Title",
 *     ),
 *     @OA\Property(
 *         property="locale",
 *         type="string",
 *         description="Locale",
 *     ),
 *     @OA\Property(
 *         property="is_active",
 *         type="boolean",
 *     ),
 * )
 */
class CategoryOA
{

}
