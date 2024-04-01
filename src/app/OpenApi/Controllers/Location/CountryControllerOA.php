<?php

namespace App\OpenApi\Controllers\Location;

use OpenApi\Annotations as OA;

class CountryControllerOA
{
    /**
     * @OA\Post(
     *      path="api/countries",
     *      operationId="CreateCountry",
     *      tags={"Country"},
     *      summary="Create country",
     *      description="Create country",
     *
     *      @OA\Parameter(ref="#/components/parameters/token_header"),
     *
     *      @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/create_country"),
     *      ),
     *
     *      @OA\Response(response="200", ref="#/components/responses/create_country_response"),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     *   )
     */
    public function create(): void
    {}
    
    /**
     * @OA\GET(
     *      path="api/countries",
     *      operationId="Countries",
     *      tags={"Country"},
     *      summary="Get all country",
     *      description="Get all country",
     *
     *      @OA\Parameter(ref="#/components/parameters/token_header"),
     *
     *      @OA\Response(response="200", ref="#/components/responses/create_country_response"),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     *   )
     */
    public function index(): void
    {}


    /**
     * @OA\PUT(
     *      path="api/countries",
     *      operationId="Update Country",
     *      tags={"Country"},
     *      summary="Update country",
     *      description="Update country",
     *
     *      @OA\Parameter(ref="#/components/parameters/token_header"),
     *
     *      @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/create_country"),
     *      ),
     *
     *      @OA\Response(response="200", ref="#/components/responses/create_country_response"),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     *       @OA\Response(
     *           response=404,
     *           description="Country not found"
     *       )
     *   )
     */
    
    public function update(): void
    {}

    /**
     * @OA\GET(
     *      path="api/countries/{id}",
     *      operationId="ShowCountryById",
     *      tags={"Country"},
     *      summary="Show country by ID",
     *      description="Show a country by its ID.",
     *
     *      @OA\Parameter(
     *          name="id",
     *          in="path",
     *          required=true,
     *          description="ID of the country",
     *          @OA\Schema(
     *              type="integer",
     *              format="int64"
     *          )
     *      ),
     *
     *      @OA\Parameter(ref="#/components/parameters/token_header"),
     *      
     *      @OA\Response(response="200", ref="#/components/responses/create_country_response"),
     *     
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Country not found"
     *      )
     *  )
     */
    public function show(): void
    {}
    
    /**
     * @OA\DELETE(
     *      path="api/countries/{id}",
     *      operationId="DeleteCountryById",
     *      tags={"Country"},
     *      summary="Delete country by ID",
     *      description="Delete a country by its ID.",
     *
     *      @OA\Parameter(
     *          name="id",
     *          in="path",
     *          required=true,
     *          description="ID of the country to be deleted",
     *          @OA\Schema(
     *              type="integer",
     *              format="int64"
     *          )
     *      ),
     *
     *      @OA\Parameter(ref="#/components/parameters/token_header"),
     *
     *      @OA\Response(
     *          response=204,
     *          description="No content",
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Country not found"
     *      )
     *  )
     */
    public function delete(): void
    {}
}
