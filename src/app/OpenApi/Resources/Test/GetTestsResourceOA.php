<?php

namespace App\OpenApi\Resources\Test;

/**
 * @OA\Response(
 *     response="create_test_response",
 *     description="Test response.",
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
 *          property="description",
 *          type="string",
 *       ),
 *       @OA\Property(
 *          property="keywords",
 *          type="string",
 *       ),
 *       @OA\Property(
 *          property="locale",
 *          type="string",
 *          enum={"kz", "ru", "en", "de", "es", "cn"}
 *       ),
 *       @OA\Property(
 *          property="category_id",
 *          type="integer",
 *       ),
 *       @OA\Property(
 *          property="is_active",
 *          type="boolean",
 *       ),
 *       @OA\Property(
 *          property="questions",
 *          type="array",
 *          @OA\Items(ref="#/components/schemas/test_question_response"),
 *      ),
 *      @OA\Property(
 *          property="results",
 *          type="array",
 *          @OA\Items(ref="#/components/schemas/test_result_response"),
 *      ),
 *    ),
 *  )
 */
class GetTestsResourceOA
{
}
