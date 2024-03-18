<?php

namespace App\OpenApi\Resources\Auth;

use OpenApi\Annotations as OA;

/**
 * @OA\Response(
 *     response="auth_user_response",
 *     description="Auth user response.",
 *     @OA\JsonContent(
 *       @OA\Property(
 *          property="token",
 *          type="string",
 *       ),
 *       @OA\Property(
 *          property="user",
 *          type="array",
 *          @OA\Items(ref="#/components/schemas/user_response"),
 *       ),
 *    ),
 *  )
 */
class AdminAuthResourceOA
{
}
