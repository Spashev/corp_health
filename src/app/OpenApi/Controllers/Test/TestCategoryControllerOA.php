<?php

namespace App\OpenApi\Controllers\Test;

use OpenApi\Annotations as OA;

class TestCategoryControllerOA
{
    /**
     * @OA\Post(
     *      path="api/tests/category",
     *      operationId="CreateTestCategory",
     *      tags={"TestCategory"},
     *      summary="Create test category",
     *      description="Create test category",
     *
     *      @OA\Parameter(ref="#/components/parameters/token_header"),
     *
     *      @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/create_test_category"),
     *      ),
     *
     *      @OA\Response(response="200", ref="#/components/responses/create_test_category_response"),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     *   )
     */
    public function create(): void
    {}
    
    /**
     * @OA\PUT(
     *      path="api/tests/category",
     *      operationId="UpdateTestCategory",
     *      tags={"TestCategory"},
     *      summary="Update test category",
     *      description="Update test category",
     *
     *      @OA\Parameter(ref="#/components/parameters/token_header"),
     *
     *      @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/create_test_category"),
     *      ),
     *
     *      @OA\Response(response="200", ref="#/components/responses/create_test_category_response"),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     *      @OA\Response(
     *           response=404,
     *           description="Test category not found"
     *      ),
     *   )
     */
    public function update(): void
    {}
    
    /**
     * @OA\GET(
     *      path="api/tests/category",
     *      operationId="TestCategories",
     *      tags={"TestCategory"},
     *      summary="Get all test categories",
     *      description="Get all test categories",
     *
     *      @OA\Parameter(ref="#/components/parameters/token_header"),
     *
     *      @OA\Response(response="200", ref="#/components/responses/create_test_category_response"),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     *   )
     */
    public function index(): void
    {}
    
    /**
     * @OA\GET(
     *      path="api/tests/category/{id}",
     *      operationId="ShowTestCategory",
     *      tags={"TestCategory"},
     *      summary="Show test category",
     *      description="Show test category",
     *
     *      @OA\Parameter(ref="#/components/parameters/token_header"),
     *
     *      @OA\Response(response="200", ref="#/components/responses/create_test_category_response"),
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
     *          description="Test category not found"
     *      ),
     *   )
     */
    public function show(): void
    {}

    /**
     * @OA\DELETE(
     *      path="api/tests/category/{id}",
     *      operationId="DeleteTestCategory",
     *      tags={"TestCategory"},
     *      summary="Delete test category",
     *      description="Delete test category",
     *
     *      @OA\Parameter(ref="#/components/parameters/token_header"),
     *
     *       @OA\Response(
     *           response=204,
     *           description="No content",
     *       ),
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
     *          description="Test category not found"
     *      ),
     *   )
     */
    public function delete(): void
    {}
}
