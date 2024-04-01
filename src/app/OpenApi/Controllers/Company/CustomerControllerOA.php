<?php

namespace App\OpenApi\Controllers\Company;

use OpenApi\Annotations as OA;

class CustomerControllerOA
{
    /**
     * @OA\Post(
     *      path="api/company/customers",
     *      operationId="CreateCompanyCustomer",
     *      tags={"CompanyCustomer"},
     *      summary="Create customer",
     *      description="Create customer",
     *
     *      @OA\Parameter(ref="#/components/parameters/token_header"),
     *
     *      @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/create_customer"),
     *      ),
     *
     *      @OA\Response(response="200", ref="#/components/responses/create_customer_response"),
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
     *      path="api/company/customers",
     *      operationId="CompanyCustomers",
     *      tags={"CompanyCustomer"},
     *      summary="Get all customer",
     *      description="Get all customer",
     *
     *      @OA\Parameter(ref="#/components/parameters/token_header"),
     *
     *      @OA\Response(response="200", ref="#/components/responses/create_customer_response"),
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
     *      path="api/company/customers",
     *      operationId="Update CompanyCustomer",
     *      tags={"CompanyCustomer"},
     *      summary="Update customer",
     *      description="Update customer",
     *
     *      @OA\Parameter(ref="#/components/parameters/token_header"),
     *
     *      @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/create_customer"),
     *      ),
     *
     *      @OA\Response(response="200", ref="#/components/responses/create_customer_response"),
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
     *           description="CompanyCustomer not found"
     *       )
     *   )
     */
    
    public function update(): void
    {}

    /**
     * @OA\GET(
     *      path="api/company/customers/{id}",
     *      operationId="ShowCompanyCustomerById",
     *      tags={"CompanyCustomer"},
     *      summary="Show customer by ID",
     *      description="Show a customer by its ID.",
     *
     *      @OA\Parameter(
     *          name="id",
     *          in="path",
     *          required=true,
     *          description="ID of the customer",
     *          @OA\Schema(
     *              type="integer",
     *              format="int64"
     *          )
     *      ),
     *
     *      @OA\Parameter(ref="#/components/parameters/token_header"),
     *      
     *      @OA\Response(response="200", ref="#/components/responses/create_customer_response"),
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
     *          description="CompanyCustomer not found"
     *      )
     *  )
     */
    public function show(): void
    {}
    
    /**
     * @OA\DELETE(
     *      path="api/company/customers/{id}",
     *      operationId="DeleteCompanyCustomerById",
     *      tags={"CompanyCustomer"},
     *      summary="Delete customer by ID",
     *      description="Delete a customer by its ID.",
     *
     *      @OA\Parameter(
     *          name="id",
     *          in="path",
     *          required=true,
     *          description="ID of the customer to be deleted",
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
     *          description="CompanyCustomer not found"
     *      )
     *  )
     */
    public function delete(): void
    {}
}
