<?php

namespace App\OpenApi\Resources\Location;

use OpenApi\Annotations as OA;

/**
 * @OA\Response(
 *     response="create_country_response",
 *     description="Country response.",
 *     @OA\JsonContent(
 *       @OA\Property(
 *          property="id",
 *          type="integer",
 *       ),
 *       @OA\Property(
 *          property="name",
 *          type="string",
 *       ),
 *       @OA\Property(
 *          property="code",
 *          type="string",
 *       ),
 *      @OA\Property(
 *          property="cities",
 *          type="array",
 *          @OA\Items(ref="#/components/schemas/cities_create"),
 *      ),
 *    ),
 *  )
 */
class GetCountriesResourceOA
{
}
