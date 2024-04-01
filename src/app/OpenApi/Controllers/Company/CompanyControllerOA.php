<?php

namespace App\OpenApi\Controllers\Company;

use OpenApi\Annotations as OA;

class CompanyControllerOA
{
    /**
     * @OA\Post(
     *      path="api/companies",
     *      operationId="CreateCompany",
     *      tags={"Company"},
     *      summary="Create company",
     *      description="Create company",
     *
     *      @OA\Parameter(ref="#/components/parameters/token_header"),
     *
     *      @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/create_company"),
     *      ),
     *
     *      @OA\Response(response="200", ref="#/components/responses/create_company_response"),
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
     *      path="api/companies",
     *      operationId="Companys",
     *      tags={"Company"},
     *      summary="Get all company",
     *      description="Get all company",
     *
     *      @OA\Parameter(ref="#/components/parameters/token_header"),
     *
     *      @OA\Response(response="200", ref="#/components/responses/create_company_response"),
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
     *      path="api/companies",
     *      operationId="Update Company",
     *      tags={"Company"},
     *      summary="Update company",
     *      description="Update company",
     *
     *      @OA\Parameter(ref="#/components/parameters/token_header"),
     *
     *      @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/create_company"),
     *      ),
     *
     *      @OA\Response(response="200", ref="#/components/responses/create_company_response"),
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
     *           description="Company not found"
     *       )
     *   )
     */
    
    public function update(): void
    {}

    /**
     * @OA\GET(
     *      path="api/companies/{id}",
     *      operationId="ShowCompanyById",
     *      tags={"Company"},
     *      summary="Show company by ID",
     *      description="Show a company by its ID.",
     *
     *      @OA\Parameter(
     *          name="id",
     *          in="path",
     *          required=true,
     *          description="ID of the company",
     *          @OA\Schema(
     *              type="integer",
     *              format="int64"
     *          )
     *      ),
     *
     *      @OA\Parameter(ref="#/components/parameters/token_header"),
     *      
     *      @OA\Response(response="200", ref="#/components/responses/create_company_response"),
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
     *          description="Company not found"
     *      )
     *  )
     */
    public function show(): void
    {}
    
    /**
     * @OA\DELETE(
     *      path="api/companies/{id}",
     *      operationId="DeleteCompanyById",
     *      tags={"Company"},
     *      summary="Delete company by ID",
     *      description="Delete a company by its ID.",
     *
     *      @OA\Parameter(
     *          name="id",
     *          in="path",
     *          required=true,
     *          description="ID of the company to be deleted",
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
     *          description="Company not found"
     *      )
     *  )
     */
    public function delete(): void
    {}
}
