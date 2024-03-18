<?php

namespace App\OpenApi\Controllers\User;

use OpenApi\Annotations as OA;

class UserMeControllerOA
{
    /**
     * @OA\GET(
     *      path="api/user/me",
     *      operationId="UserMe",
     *      tags={"Authentication"},
     *      summary="User me",
     *      description="User me",
     *
     *      @OA\Parameter(ref="#/components/parameters/token_header"),
     *
     *      @OA\Response(response="200", ref="#/components/responses/users_response"),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Bad request"
     *      )
     *   )
     */
    public function userMe(): void
    {}
}
