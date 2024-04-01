<?php

namespace App\OpenApi\Controllers\User;

use OpenApi\Annotations as OA;

class UserActionLogControllerOA
{
    /**
     * @OA\Get(
     *      path="/api/users/logs",
     *      operationId="UserActionLogs",
     *      tags={"User/Logs"},
     *      summary="Get all users logs",
     *      description="Get all users logs",
     *
     *      @OA\Response(response="200", description="OK", ref="#/components/responses/users_actions_logs_response"),
     *      @OA\Response(response="401", description="Unauthenticated"),
     *      @OA\Response(response="403", description="Forbidden")
     *   )
     */
    public function index(): void
    {}
}
