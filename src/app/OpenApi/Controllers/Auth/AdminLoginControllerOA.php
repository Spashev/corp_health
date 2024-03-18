<?php

namespace App\OpenApi\Controllers\Auth;

use OpenApi\Annotations as OA;

class AdminLoginControllerOA
{
    /**
     * @OA\Post(
     *      path="api/auth/login",
     *      operationId="Admin authenticate",
     *      tags={"Authentication"},
     *      summary="Authenticate admin user",
     *      description="Authenticate admin user",
     *
     *      @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/admin_login"),
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
     *      path="api/auth/register",
     *      operationId="Admin register",
     *      tags={"Authentication"},
     *      summary="Register admin user",
     *      description="Register admin user",
     *
     *      @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/admin_register"),
     *      ),
     *
     *      @OA\Response(response="200", ref="#/components/responses/auth_user_response"),
     *      @OA\Response(
     *          response=404,
     *          description="Bad request"
     *      )
     *   )
     */
    public function register(): void
    {}
    
    /**
     * @OA\Post(
     *      path="api/auth/logout",
     *      operationId="Admin logout",
     *      tags={"Authentication"},
     *      summary="Logout admin user",
     *      description="Logout admin user",
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

    /**
     * @OA\GET(
     *     path="/api/auth/generate-password/",
     *     operationId="generatePassword",
     *     tags={"Authentication"},
     *     summary="Generate a random password",
     *     description="This endpoint generates a random password.",
     *     @OA\Response(
     *         response=204,
     *         description="Password generated successfully",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="password",
     *                 type="string",
     *                 example="s3cr3tP@ssw0rd"
     *             ),
     *         ),
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Bad request",
     *     ),
     * )
     */
    public function generatePassword(): void
    {
    }
}
