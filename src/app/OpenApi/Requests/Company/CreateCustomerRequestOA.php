<?php

namespace App\OpenApi\Requests\Company;


use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *     schema="create_customer",
 *     required={
 *         "code",
 *         "name",
 *         "name_en",
 *         "partner_id",
 *         "start_date",
 *         "maintain",
 *         "status",
 *     },
 *     @OA\Property(
 *         property="code",
 *         type="string",
 *     ),
 *      @OA\Property(
 *          property="name",
 *          type="string",
 *      ),
 *      @OA\Property(
 *          property="name_en",
 *          type="string",
 *      ),
 *      @OA\Property(
 *          property="partner_id",
 *          type="integer",
 *      ),
 *      @OA\Property(
 *          property="start_date",
 *          type="datetime",
 *      ),
 *      @OA\Property(
 *          property="maintain",
 *          type="boolean",
 *      ),
 *       @OA\Property(
 *           property="status",
 *           type="boolean",
 *       ),
 *  )
 */
class CreateCustomerRequestOA
{
}
