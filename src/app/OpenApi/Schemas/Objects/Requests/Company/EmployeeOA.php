<?php

namespace App\OpenApi\Schemas\Objects\Requests\Company;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *     schema="company_employee",
 *     required={
 *         "full_time",
 *         "part_time",
 *         "psychological_consulting",
 *         "legal_consulting",
 *         "coaching",
 *         "concierge_service",
 *         "webinars",
 *     },
 *     @OA\Property(
 *         property="name",
 *         type="boolean",
 *     ),
 *      @OA\Property(
 *          property="part_time",
 *          type="boolean",
 *      ),
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
class EmployeeOA
{

}
