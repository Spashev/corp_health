<?php

namespace App\OpenApi\Schemas\Objects\Requests\Company;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *     schema="company_relative",
 *     required={
 *         "customer_category_id",
 *         "psychological_consulting",
 *         "legal_consulting",
 *         "coaching",
 *         "concierge_service",
 *         "webinars",
 *     },
 *     @OA\Property(
 *         property="customer_category_id",
 *         type="integer",
 *     ),
 *      @OA\Property(
 *          property="psychological_consulting",
 *          type="integer",
 *      ),
 *      @OA\Property(
 *          property="legal_consulting",
 *          type="integer",
 *      ),
 *      @OA\Property(
 *          property="coaching",
 *          type="integer",
 *      ),
 *      @OA\Property(
 *          property="concierge_service",
 *          type="integer",
 *      ),
 *      @OA\Property(
 *          property="webinars",
 *          type="integer",
 *      ),
 * )
 */
class RelativeOA
{

}
