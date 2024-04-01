<?php

namespace App\OpenApi\Schemas\Objects\Response\User;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *     schema="user_log_response",
 *     required={
 *          "id",
 *          "full_name",
 *          "role",
 *          "action",
 *          "date",
 *      },
 *      @OA\Property(
 *           property="id",
 *           type="integer",
 *           description="order id",
 *      ),
 *        @OA\Property(
 *           property="full_name",
 *           type="string",
 *       ),
 *       @OA\Property(
 *          property="role",
 *          type="string",
 *       ),
 *       @OA\Property(
 *          property="action",
 *          type="string",
 *       ),
 *       @OA\Property(
 *         property="date",
 *         type="datetime",
 *      ),
 *  )
 */
class UserActionLogOA
{
}
