<?php

namespace App\OpenApi\Schemas\Objects\Response\User;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *     schema="user_response",
 *     required={
 *          "id",
 *          "first_name",
 *          "last_name",
 *          "middle_name",
 *          "email",
 *          "phone",
 *          "role",
 *          "access",
 *          "created_at",
 *          "country_id",
 *      },
 *      @OA\Property(
 *           property="id",
 *           type="integer",
 *           description="order id",
 *      ),
 *     @OA\Property(
 *         property="first_name",
 *         type="string"
 *    ),
 *     @OA\Property(
 *         property="last_name",
 *         type="string"
 *    ),
 *      @OA\Property(
 *          property="middle_name",
 *          type="string",
 *     ),
 *     @OA\Property(
 *         property="email",
 *         type="string"
 *     ),
 *     @OA\Property(
 *         property="phone",
 *         type="string"
 *    ),
 *    @OA\Property(
 *        property="role",
 *        type="string",
 *        enum={"CLIENT", "CONSULTANT", "COORDINATOR", "ADMINISTRATOR"}
 *   ),
 *    @OA\Property(
 *        property="access",
 *        type="string",
 *        enum={"FULL", "MOBIL"}
 *   ),
 *    @OA\Property(
 *        property="created_at",
 *        type="string",
 *   ),
 *    @OA\Property(
 *        property="country_id",
 *        type="integer",
 *   ),
 *  )
 */
class UserOA
{
}
