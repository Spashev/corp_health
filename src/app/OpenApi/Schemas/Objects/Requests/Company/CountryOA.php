<?php

namespace App\OpenApi\Schemas\Objects\Requests\Company;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *     schema="comapny_countries",
 *     required={
 *         "country_id",
 *         "city"
 *     },
 *     @OA\Property(
 *         property="country_id",
 *         type="integer",
 *     ),
 *     @OA\Property(
 *         property="city",
 *         type="array",
 *         @OA\Items(ref="#/components/schemas/comapny_city"),
 *      ),
 * )
 */
class CountryOA
{

}
