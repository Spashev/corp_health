<?php

namespace App\OpenApi\Schemas\Objects\Requests\Test;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *     schema="test_question",
 *     required={
 *         "title",
 *         "locale",
 *         "test_id",
 *     },
 *     @OA\Property(
 *         property="title",
 *         type="string",
 *         description="Title",
 *     ),
 *       @OA\Property(
 *           property="locale",
 *           type="string",
 *           enum={"kz", "ru", "en", "de", "es", "cn"}
 *      ),
 *       @OA\Property(
 *           property="test_id",
 *           type="integer"
 *      ),
 * )
 */
class QuestionOA
{

}
