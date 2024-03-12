<?php

namespace App\OpenApi\Schemas\Objects\Requests\Test;

/**
 * @OA\Schema(
 *     schema="test_answer",
 *     required={
 *          "answer",
 *          "ball",
 *          "locale",
 *          "question_id",
 *      },
 *     @OA\Property(
 *         property="answer",
 *         type="string"
 *    ),
 *     @OA\Property(
 *         property="ball",
 *         type="integer"
 *    ),
 *      @OA\Property(
 *          property="locale",
 *          type="string",
 *          enum={"kz", "ru", "en", "de", "es", "cn"}
 *     ),
 *      @OA\Property(
 *          property="question_id",
 *          type="integer"
 *     ),
 *  )
 */
class AnswerOA
{

}
