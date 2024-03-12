<?php

namespace App\OpenApi\Controllers\Test;

class TestControllerOA
{
    /**
     * @OA\Post(
     *      path="api/v1/tests",
     *      operationId="SetOrder",
     *      tags={"Test"},
     *      summary="Create test",
     *      description="Create test",
     *
     *      @OA\Parameter(ref="#/components/parameters/token_header"),
     *
     *      @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/create_test"),
     *      ),
     *
     *      @OA\Response(response="200", ref="#/components/responses/create_test_response"),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     *    )
     */
    public function create(){}
}
