<?php

namespace App\OpenApi\Schemas\Objects\Requests\Location;


use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *     schema="county_result",
 *     required={
 *         "name",
 *         "code",
 *     },
 *      @OA\Property(
 *          property="name",
 *          type="string",
 *          description="name",
 *      ),
 *       @OA\Property(
 *           property="code",
 *           type="string",
 *           description="code",
 *       ),
 *  )
 */
class CountryOA
{

}
