<?php

namespace App\OpenApi\Resources\Test;

/**
 * @OA\Response(
 *     response="create_test_response",
 *     description="Test response.",
 *     @OA\JsonContent(
 *         @OA\Property(
 *             property="id",
 *             type="integer",
 *             description="test id",
 *         ),
 *         @OA\Property(
 *             property="created_at",
 *             ref="#/components/schemas/date_time"
 *         ),
 *       ),
 *     ),
 *   )
 */
class GetTestsResourceOA
{
}
