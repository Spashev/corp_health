<?php

namespace App\OpenApi\Controllers\Test;

use OpenApi\Annotations as OA;

class TestControllerOA
{
    /**
     * @OA\Post(
     *      path="api/tests",
     *      operationId="CreateTest",
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
     *   )
     */
    public function create(): void
    {}
    
    /**
     * @OA\GET(
     *      path="api/tests",
     *      operationId="Tests",
     *      tags={"Test"},
     *      summary="Get all test",
     *      description="Get all test",
     *
     *      @OA\Parameter(ref="#/components/parameters/token_header"),
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
     *   )
     */
    public function index(): void
    {}


    /**
     * @OA\PUT(
     *      path="api/tests",
     *      operationId="Update Test",
     *      tags={"Test"},
     *      summary="Update test",
     *      description="Update test",
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
     *      ),
     *       @OA\Response(
     *           response=404,
     *           description="Test not found"
     *       )
     *   )
     */
    
    public function update(): void
    {}

    /**
     * @OA\GET(
     *      path="api/tests/{id}",
     *      operationId="ShowTestById",
     *      tags={"Test"},
     *      summary="Show test by ID",
     *      description="Show a test by its ID.",
     *
     *      @OA\Parameter(
     *          name="id",
     *          in="path",
     *          required=true,
     *          description="ID of the test",
     *          @OA\Schema(
     *              type="integer",
     *              format="int64"
     *          )
     *      ),
     *
     *      @OA\Parameter(ref="#/components/parameters/token_header"),
     *      
     *      @OA\Response(response="200", ref="#/components/responses/create_test_response"),
     *     
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Test not found"
     *      )
     *  )
     */
    public function show(): void
    {}
    
    /**
     * @OA\DELETE(
     *      path="api/tests/{id}",
     *      operationId="DeleteTestById",
     *      tags={"Test"},
     *      summary="Delete test by ID",
     *      description="Delete a test by its ID.",
     *
     *      @OA\Parameter(
     *          name="id",
     *          in="path",
     *          required=true,
     *          description="ID of the test to be deleted",
     *          @OA\Schema(
     *              type="integer",
     *              format="int64"
     *          )
     *      ),
     *
     *      @OA\Parameter(ref="#/components/parameters/token_header"),
     *
     *      @OA\Response(
     *          response=204,
     *          description="No content",
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Test not found"
     *      )
     *  )
     */
    public function delete(): void
    {}
}
