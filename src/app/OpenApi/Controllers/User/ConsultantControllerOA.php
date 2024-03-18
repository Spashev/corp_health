<?php

namespace App\OpenApi\Controllers\User;

use OpenApi\Annotations as OA;

class ConsultantControllerOA
{
    /**
     * @OA\Post(
     *      path="/api/consultants",
     *      operationId="ConsultantCreate",
     *      tags={"User/Consultant"},
     *      summary="Consultant create",
     *      description="Consultant create",
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
     *      path="/api/consultants",
     *      operationId="Consultants",
     *      tags={"User/Consultant"},
     *      summary="Get all consultants",
     *      description="Get all consultants",
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
     *      path="/api/consultants",
     *      operationId="UpdateConsultant",
     *      tags={"User/Consultant"},
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
     *      path="/api/consultants/{id}",
     *      operationId="ShowConsultantById",
     *      tags={"User/Consultant"},
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
     *      path="/api/consultants/{id}",
     *      operationId="DeleteConsultantById",
     *      tags={"User/Consultant"},
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
