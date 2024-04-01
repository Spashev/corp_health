<?php

namespace App\OpenApi\Resources\Company;

use OpenApi\Annotations as OA;

/**
 * @OA\Response(
 *    response="create_company_response",
 *    description="Customer response.",
 *    @OA\JsonContent(
 *     @OA\Property(
 *         property="id",
 *         type="integer",
 *     ),
 *     @OA\Property(
 *         property="company_code",
 *         type="string",
 *     ),
 *      @OA\Property(
 *          property="status",
 *          type="boolean",
 *      ),
 *      @OA\Property(
 *          property="company_identify",
 *          type="string",
 *      ),
 *       @OA\Property(
 *           property="customer_id",
 *           type="integer",
 *       ),
 *      @OA\Property(
 *          property="name",
 *          type="string",
 *      ),
 *      @OA\Property(
 *          property="name_en",
 *          type="string",
 *      ),
 *      @OA\Property(
 *          property="contract_period",
 *          type="datetime",
 *      ),
 *      @OA\Property(
 *          property="signature_date",
 *          type="datetime",
 *      ),
 *      @OA\Property(
 *          property="feedback_link",
 *          type="string",
 *      ),
 *      @OA\Property(
 *          property="mobile_app",
 *          type="boolean",
 *      ),
 *      @OA\Property(
 *          property="mobile_company_code",
 *          type="string",
 *      ),
 *       @OA\Property(
 *           property="mobile_manager_code",
 *           type="string",
 *       ),
 *       @OA\Property(
 *           property="mobile_partner_id",
 *           type="string",
 *       ),
 *       @OA\Property(
 *           property="mobile_organization_id",
 *           type="string",
 *       ),
 *      @OA\Property(
 *          property="subsidiaries",
 *          type="array",
 *          @OA\Items(ref="#/components/schemas/company_subsidiaries"),
 *      ),
 *       @OA\Property(
 *           property="countries",
 *           type="array",
 *           @OA\Items(ref="#/components/schemas/comapny_countries"),
 *       ),
 *       @OA\Property(
 *           property="contacts",
 *           type="array",
 *           @OA\Items(ref="#/components/schemas/company_contract"),
 *       ),
 *       @OA\Property(
 *           property="employees",
 *           type="array",
 *           @OA\Items(ref="#/components/schemas/company_employee"),
 *       ),
 *       @OA\Property(
 *           property="relatives",
 *           type="array",
 *           @OA\Items(ref="#/components/schemas/company_relative"),
 *       ),
 *     ),
 *  )
 */
class GetCompanyResourceOA
{
}
