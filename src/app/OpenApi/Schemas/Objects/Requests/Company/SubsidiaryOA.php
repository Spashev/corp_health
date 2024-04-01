<?php

namespace App\OpenApi\Schemas\Objects\Requests\Company;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *     schema="company_subsidiaries",
 *     required={
 *         "name",
 *     },
 *     @OA\Property(
 *         property="name",
 *         type="string",
 *         description="Name",
 *     ),
 * )
 */
class SubsidiaryOA
{

}
