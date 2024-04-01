<?php

namespace App\OpenApi\Resources\User;

use OpenApi\Annotations as OA;

/**
 * @OA\Response(
 *     response="users_actions_logs_response",
 *     description="User action logs response.",
 *     @OA\JsonContent(
 *       @OA\Property(
 *           property="data",
 *           type="array",
 *           @OA\Items(ref="#/components/schemas/user_log_response")
 *       )
 *    ),
 *  )
 */
class UserActionLogRequestOA
{
}
