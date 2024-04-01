<?php

namespace App\OpenApi\Schemas\Objects\Response\Location;


use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *     schema="create_country_response",
 *     required={
 *         "id",
 *         "name",
 *         "code",
 *         "cities",
 *     },         
 *     @OA\Property(
 *         property="id",
 *         type="integer",
 *         description="order id",
 *      ),
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
 *      @OA\Property(
 *          property="cities",
 *          type="array",
 *          @OA\Items(ref="#/components/schemas/create_city_response"),
 *      ),
 *  )
 */
class CountryOA
{

}
