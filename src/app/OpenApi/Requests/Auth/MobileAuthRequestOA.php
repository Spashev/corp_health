<?php

namespace App\OpenApi\Requests\Auth;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *     schema="mobile_login",
 *     required={
 *         "code",
 *         "login",
 *         "password",
 *     },
 *      @OA\Property(
 *          property="code",
 *          type="string",
 *      ),
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
class MobileAuthRequestOA
{
}
