<?php

namespace App\OpenApi\Resources\Company;

use OpenApi\Annotations as OA;

/**
 * @OA\Response(
 *     response="create_customer_response",
 *     description="Customer response.",
 *     @OA\JsonContent(
 *       @OA\Property(
 *          property="id",
 *          type="integer",
 *       ),
 *      @OA\Property(
 *          property="code",
 *          type="string",
 *      ),
 *       @OA\Property(
 *           property="name",
 *           type="string",
 *       ),
 *       @OA\Property(
 *           property="name_en",
 *           type="string",
 *       ),
 *       @OA\Property(
 *           property="partner_id",
 *           type="integer",
 *       ),
 *       @OA\Property(
 *           property="start_date",
 *           type="datetime",
 *       ),
 *       @OA\Property(
 *           property="maintain",
 *           type="boolean",
 *       ),
 *        @OA\Property(
 *            property="status",
 *            type="boolean",
 *        ),
 *        @OA\Property(
 *            property="created_at",
 *            type="datetime",
 *        ),
 *    ),
 *  )
 */
class GetCustomersResourceOA
{
}
