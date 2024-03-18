<?php

namespace App\OpenApi\Requests\Auth;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *     schema="admin_register",
 *     required={
 *         "first_name",
 *         "last_name",
 *         "middle_name",
 *         "email",
 *         "phone",
 *         "role",
 *         "access",
 *         "password",
 *         "password_confirmation",
 *     },
 *      @OA\Property(
 *          property="first_name",
 *          type="string"
 *     ),
 *      @OA\Property(
 *          property="last_name",
 *          type="string"
 *     ),
 *       @OA\Property(
 *           property="middle_name",
 *           type="string",
 *      ),
 *      @OA\Property(
 *          property="email",
 *          type="string"
 *      ),
 *      @OA\Property(
 *          property="phone",
 *          type="string"
 *     ),
 *     @OA\Property(
 *         property="role",
 *         type="string",
 *         enum={"CLIENT", "CONSULTANT", "COORDINATOR", "ADMINISTRATOR"}
 *    ),
 *     @OA\Property(
 *         property="access",
 *         type="string",
 *         enum={"FULL", "MOBIL"}
 *    ),
 *     @OA\Property(
 *         property="password",
 *         type="string"
 *    ),
 *     @OA\Property(
 *         property="password_confirmation",
 *         type="string"
 *    ),
 * )
 */
class AdminRegisterRequestOA
{
}
