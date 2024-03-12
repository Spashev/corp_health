<?php

namespace App\OpenApi\Requests\Test;

/**
 * @OA\Schema(
 *     schema="create_test",
 *     required={
 *         "title",
 *         "description",
 *         "keywords",
 *         "locale",
 *         "category_id",
 *         "is_active",
 *     },
 *     @OA\Property(
 *         property="title",
 *         type="string",
 *     ),
 *     @OA\Property(
 *         property="description",
 *         type="string",
 *     ),
 *     @OA\Property(
 *         property="keywords",
 *         type="string",
 *     ),
 *     @OA\Property(
 *         property="locale",
 *         type="string",
 *         enum={"kz", "ru", "en", "de", "es", "cn"}
 *     ),
 *     @OA\Property(
 *         property="category_id",
 *         type="integer",
 *     ),
 *     @OA\Property(
 *         property="is_active",
 *         type="boolean",
 *     ),
 * )
 */
class CreateTestRequestOA
{
}
