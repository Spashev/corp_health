<?php

namespace App\OpenApi\Schemas\Objects\Response\Test;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *     schema="test_question_response",
 *     required={
 *         "id",
 *         "title",
 *         "locale",
 *         "test_id",
 *     },
 *     @OA\Property(
 *          property="id",
 *          type="integer",
 *          description="order id",
 *     ),
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
