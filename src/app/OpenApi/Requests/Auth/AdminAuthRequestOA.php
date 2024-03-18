<?php

namespace App\OpenApi\Requests\Auth;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *     schema="admin_login",
 *     required={
 *         "login",
 *         "password",
 *     },
 *     @OA\Property(
 *         property="login",
 *         type="string",
 *     ),
 *     @OA\Property(
 *         property="password",
 *         type="string",
 *     )
 * )
 */
class AdminAuthRequestOA
{
}
