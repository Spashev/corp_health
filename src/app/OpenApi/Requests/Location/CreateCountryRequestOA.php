<?php

namespace App\OpenApi\Requests\Location;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *     schema="create_country",
 *     required={
 *         "name",
 *         "code",
 *         "cities",
 *     },
 *     @OA\Property(
 *         property="name",
 *         type="string",
 *     ),
 *     @OA\Property(
 *         property="code",
 *         type="string",
 *     ),
 *     @OA\Property(
 *         property="cities",
 *         type="array",
 *         @OA\Items(ref="#/components/schemas/cities_create"),
 *     )
 * )
 */
class CreateCountryRequestOA
{
}
