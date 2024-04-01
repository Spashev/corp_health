<?php

namespace App\OpenApi\Schemas\Objects\Requests\Test;


use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *     schema="test_result",
 *     required={
 *         "ball",
 *         "description",
 *         "locale",
 *         "question_id",
 *     },
 *      @OA\Property(
 *          property="ball",
 *          type="string",
 *          description="Ball",
 *      ),
 *       @OA\Property(
 *           property="description",
 *           type="string",
 *           description="Description",
 *       ),
 *        @OA\Property(
 *            property="locale",
 *            type="string",
 *            enum={"kz", "ru", "en", "de", "es", "cn"}
 *       ),
 *        @OA\Property(
 *            property="question_id",
 *            type="integer"
 *       ),
 *  )
 */
class ResultOA
{

}
