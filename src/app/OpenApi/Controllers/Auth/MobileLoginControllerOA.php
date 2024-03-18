<?php

namespace App\OpenApi\Controllers\Auth;

use OpenApi\Annotations as OA;

class MobileLoginControllerOA
{
    /**
     * @OA\Post(
     *      path="{locale}/api/auth/login",
     *      operationId="Mobile authenticate",
     *      tags={"Authentication"},
     *      summary="Authenticate mobile user",
     *      description="Authenticate mobile user",
     *
     *      @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/mobile_login"),
     *      ),
     *
     *      @OA\Response(response="200", ref="#/components/responses/auth_user_response"),
     *      @OA\Response(
     *          response=404,
     *          description="Bad request"
     *      )
     *   )
     */
    public function login(): void
    {}
    
    /**
     * @OA\Post(
     *      path="{locale}/api/auth/logout",
     *      operationId="Mobile logout",
     *      tags={"Authentication"},
     *      summary="Logout mobile user",
     *      description="Logout mobile user",
     *
     *      @OA\Parameter(ref="#/components/parameters/token_header"),
     *
     *      @OA\Response(response="204", ref="#/components/responses/auth_user_response"),
     *      @OA\Response(
     *          response=404,
     *          description="Bad request"
     *      )
     *   )
     */
    public function logout(): void
    {}
}
