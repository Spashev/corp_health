<?php

namespace App\OpenApi\Schemas\Objects\Requests\Company;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *     schema="company_contract",
 *     required={
 *         "full_name",
 *         "phone",
 *         "email",
 *         "skype",
 *         "address",
 *     },
 *     @OA\Property(
 *         property="name",
 *         type="string",
 *         description="Name",
 *     ),
 *      @OA\Property(
 *          property="phone",
 *          type="string",
 *          description="Name",
 *      ),
 *     @OA\Property(
 *         property="email",
 *         type="string",
 *         description="Name",
 *     ),
 *     @OA\Property(
 *         property="skype",
 *         type="string",
 *         description="Name",
 *     ),
 *     @OA\Property(
 *         property="address",
 *         type="string",
 *         description="Name",
 *     ),
 * )
 */
class ContractOA
{

}
