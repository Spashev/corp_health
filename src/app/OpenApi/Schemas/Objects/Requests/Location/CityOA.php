<?php

namespace App\OpenApi\Schemas\Objects\Requests\Location;


use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *     schema="cities_create",
 *     required={
 *         "name",
 *         "postcode",
 *     },
 *     @OA\Property(
 *         property="name",
 *         type="string",
 *     ),
 *     @OA\Property(
 *         property="postcode",
 *         type="string",
 *     )
 * )
 */
class CityOA
{

}
