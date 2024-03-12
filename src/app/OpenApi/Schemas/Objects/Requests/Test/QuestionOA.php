<?php

namespace App\OpenApi\Schemas\Objects\Requests\Test;

/**
 * @OA\Schema(
 *     schema="test_question",
 *     required={
 *         "title",
 *         "locale",
 *         "question_id",
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
 *           property="question_id",
 *           type="integer"
 *      ),
 * )
 */
class QuestionOA
{

}
