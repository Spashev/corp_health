<?php

namespace App\OpenApi\Resources\User;

use OpenApi\Annotations as OA;

/**
 * @OA\Response(
 *     response="users_response",
 *     description="Test response.",
 *     @OA\JsonContent(
 *       @OA\Property(
 *          property="data",
 *          type="array",
 *          @OA\Items(ref="#/components/schemas/user_response"),
 *      ),
 *    ),
 *  )
 */
class UserRequestOA
{
}
