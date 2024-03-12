<?php

namespace App\OpenApi\Controllers;

/**
 * @OA\Info(
 *     version="1.0.0",
 *     title="Corporate Health API",
 *     description="Api aplication Corporate Health system",
 *     @OA\Contact(
 *         name="Corporate Health",
 *         email="corporate_health@health.ru"
 *     )
 * )
 *
 * @OA\Server(
 *     url="http://localhost:8000",
 *     description="develop"
 * )
 *
 * @OA\SecurityScheme(
 *     securityScheme="bearerAuth",
 *     in="header",
 *     name="bearerToken",
 *     type="http",
 *     scheme="bearer",
 *     bearerFormat="Sanctum",
 * )
 *
 * @OA\Tag(
 *     name="Test",
 *     description="CRUD test part of application.",
 * )
 *
 * @see Controller
 */
class ControllerOA
{
}
