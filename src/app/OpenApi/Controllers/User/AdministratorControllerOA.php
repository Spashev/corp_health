<?php

namespace App\OpenApi\Controllers\User;

use OpenApi\Annotations as OA;

class AdministratorControllerOA
{
    /**
     * @OA\Post(
     *      path="/api/administrators",
     *      operationId="AdministratorCreate",
     *      tags={"User/Administrator"},
     *      summary="Administrator create",
     *      description="Administrator create",
     *
     *      @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/admin_register"),
     *      ),
     *
     *      @OA\Response(response="200", description="OK", ref="#/components/responses/users_response"),
     *      @OA\Response(response="401", description="Unauthenticated"),
     *      @OA\Response(response="403", description="Forbidden")
     *   )
     */
    public function create(): void
    {}

    /**
     * @OA\Get(
     *      path="/api/administrators",
     *      operationId="Administrators",
     *      tags={"User/Administrator"},
     *      summary="Get all administrators",
     *      description="Get all administrators",
     *
     *      @OA\Response(response="200", description="OK", ref="#/components/responses/users_response"),
     *      @OA\Response(response="401", description="Unauthenticated"),
     *      @OA\Response(response="403", description="Forbidden")
     *   )
     */
    public function index(): void
    {}


    /**
     * @OA\Put(
     *      path="/api/administrators",
     *      operationId="UpdateAdministrator",
     *      tags={"User/Administrator"},
     *      summary="Update coordinator",
     *      description="Update coordinator",
     *
     *      @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/admin_register"),
     *      ),
     *
     *      @OA\Response(response="200", description="OK", ref="#/components/responses/users_response"),
     *      @OA\Response(response="401", description="Unauthenticated"),
     *      @OA\Response(response="403", description="Forbidden"),
     *      @OA\Response(response="404", description="User not found")
     *   )
     */
    public function update(): void
    {}

    /**
     * @OA\Get(
     *      path="/api/administrators/{id}",
     *      operationId="ShowAdministratorById",
     *      tags={"User/Administrator"},
     *      summary="Show coordinator by ID",
     *      description="Show coordinator by its ID.",
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
     *      @OA\Response(response="200", description="OK", ref="#/components/responses/users_response"),
     *      @OA\Response(response="401", description="Unauthenticated"),
     *      @OA\Response(response="403", description="Forbidden"),
     *      @OA\Response(response="404", description="User not found")
     *  )
     */
    public function show(): void
    {}

    /**
     * @OA\Delete(
     *      path="/api/administrators/{id}",
     *      operationId="DeleteAdministratorById",
     *      tags={"User/Administrator"},
     *      summary="Delete coordinator by ID",
     *      description="Delete coordinator by its ID.",
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
     *      @OA\Response(response="204", description="No content"),
     *      @OA\Response(response="401", description="Unauthenticated"),
     *      @OA\Response(response="403", description="Forbidden"),
     *      @OA\Response(response="404", description="User not found")
     *  )
     */
    public function delete(): void
    {}
}
