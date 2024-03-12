<?php

declare(strict_types=1);

namespace App\Http\Requests\Company;

use App\Http\Requests\ApiRequests;

class StoreCompanyRequest extends ApiRequests
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'status' => 'required|string',
            'company_identify' => 'required|string',
            'customer_id' => 'required|integer|exists:customers,id',
            'company_code' => 'required|string',
            'name' => 'required|string|min:3|max:500',
            'name_en' => 'required|string|min:3|max:500',
            'contract_period' => 'required|date',
            'signature_date' => 'required|date',
            'feedback_link' => 'required|url',
            'mobile_app' => 'required|boolean',
            'mobile_company_code' => 'required|string',
            'mobile_manager_code' => 'required|string',
            'mobile_partner_id' => 'required|string',
            'mobile_organization_id' => 'required|string',
            
            'subsidiaries' => 'required|array',
            'subsidiaries.*.name' => 'required|string|min:3|max:500',

            'countries' => 'required|array',
            'countries.*.country_id' => 'required|integer|exists:countries,id',
            'countries.*.city' => 'required|array',
            'countries.*.city.*.city_id' => 'required|integer|exists:cities,id',

            'contacts' => 'required|array',
            'contacts.*.full_name' => 'required|string|min:3',
            'contacts.*.phone' => 'required|string|min:10|max:11',
            'contacts.*.email' => 'required|email|min:3',
            'contacts.*.skype' => 'string|min:3',
            'contacts.*.address' => 'required|string|min:3',

            'employees' => 'required|array',
            'employees.*.full_time' => 'required|boolean',
            'employees.*.part_time' => 'required|boolean',
            'employees.*.psychological_consulting' => 'required|integer',
            'employees.*.legal_consulting' => 'required|integer',
            'employees.*.coaching' => 'required|integer',
            'employees.*.concierge_service' => 'required|integer',
            'employees.*.webinars' => 'required|integer',

            'relatives' => 'required|array',
            'relatives.*.partner' => 'required|boolean',
            'relatives.*.children' => 'required|boolean',
            'relatives.*.parents' => 'required|boolean',
            'relatives.*.sisters_brothers' => 'required|boolean',
            'relatives.*.other' => 'required|boolean',
            'relatives.*.psychological_consulting' => 'required|integer',
            'relatives.*.legal_consulting' => 'required|integer',
            'relatives.*.coaching' => 'required|integer',
            'relatives.*.concierge_service' => 'required|integer',
            'relatives.*.webinars' => 'required|integer',
        ];
    }
}
