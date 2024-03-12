<?php

namespace App\OpenApi\Parameters\Header;

/**
 * @OA\Parameter(
 *     parameter="token_header",
 *     name="token",
 *     in="header",
 *     required=true,
 *     description="Vendor token",
 *     @OA\Schema(
 *         type="string"
 *     ),
 * )
 */
class Token
{
}
