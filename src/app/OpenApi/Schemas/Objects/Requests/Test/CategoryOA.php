<?php

namespace App\OpenApi\Schemas\Objects\Requests\Test;

/**
 * @OA\Schema(
 *     schema="test_category",
 *     required={
 *         "title",
 *         "locale",
 *         "is_active",
 *     },
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
