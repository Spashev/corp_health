<?php

declare(strict_types=1);

namespace App\Http\Requests\Company;

use App\Http\Requests\ApiRequests;

class UpdateCompanyRequest extends ApiRequests
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'status' => 'sometimes|string',
            'company_identify' => 'sometimes|string',
            'customer_id' => 'sometimes|integer|exists:customers,id',
            'company_code' => 'sometimes|string',
            'name' => 'sometimes|string|min:3|max:500',
            'name_en' => 'sometimes|string|min:3|max:500',
            'contract_period' => 'sometimes|date',
            'signature_date' => 'sometimes|date',
            'feedback_link' => 'sometimes|url',
            'mobile_app' => 'boolean',
            'mobile_company_code' => 'sometimes|string',
            'mobile_manager_code' => 'sometimes|string',
            'mobile_partner_id' => 'sometimes|string',
            'mobile_organization_id' => 'sometimes|string',

            'subsidiaries' => 'sometimes|array',
            'subsidiaries.*.name' => 'sometimes|string|min:3|max:500',

            'countries' => 'sometimes|array',
            'countries.*.country_id' => 'sometimes|integer',
            'countries.*.city' => 'sometimes|array',
            'countries.*.city.*.city_id' => 'sometimes|integer',

            'contacts' => 'sometimes|array',
            'contacts.*.full_name' => 'sometimes|string|min:3',
            'contacts.*.phone' => 'sometimes|string|min:10|max:11',
            'contacts.*.email' => 'sometimes|email|min:3',
            'contacts.*.skype' => 'string|min:3',
            'contacts.*.address' => 'sometimes|string|min:3',

            'employees' => 'sometimes|array',
            'employees.*.full_time' => 'sometimes|boolean',
            'employees.*.part_time' => 'sometimes|boolean',
            'employees.*.psychological_consulting' => 'sometimes|integer',
            'employees.*.legal_consulting' => 'sometimes|integer',
            'employees.*.coaching' => 'sometimes|integer',
            'employees.*.concierge_service' => 'sometimes|integer',
            'employees.*.webinars' => 'sometimes|integer',

            'relatives' => 'sometimes|array',
            'relatives.*.partner' => 'sometimes|boolean',
            'relatives.*.children' => 'sometimes|boolean',
            'relatives.*.parents' => 'sometimes|boolean',
            'relatives.*.sisters_brothers' => 'sometimes|boolean',
            'relatives.*.other' => 'sometimes|boolean',
            'relatives.*.psychological_consulting' => 'sometimes|integer',
            'relatives.*.legal_consulting' => 'sometimes|integer',
            'relatives.*.coaching' => 'sometimes|integer',
            'relatives.*.concierge_service' => 'sometimes|integer',
            'relatives.*.webinars' => 'sometimes|integer',
        ];
    }
}
