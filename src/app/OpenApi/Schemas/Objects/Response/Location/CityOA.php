<?php

namespace App\OpenApi\Schemas\Objects\Response\Location;


use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *     schema="create_city_response",
 *     required={
 *         "id",
 *         "name",
 *         "postcode",
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
 *           property="postcode",
 *           type="string",
 *           description="postcode",
 *       ),
 *  )
 */
class CityOA
{

}
