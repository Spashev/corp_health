<?php

declare(strict_types=1);

namespace App\Http\Resources\Company;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GetCompanyResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'status' => $this->status,
            'company_identify' => $this->company_identify,
            'customer_id' => $this->customer_id,
            'company_code' => $this->company_code,
            'name' => $this->name,
            'name_en' => $this->name_en,
            'contract_period' => $this->contract_period,
            'signature_date' => $this->signature_date,
            'feedback_link' => $this->feedback_link,
            'mobile_app' => $this->mobile_app,
            'mobile_company_code' => $this->mobile_company_code,
            'mobile_manager_code' => $this->mobile_manager_code,
            'mobile_partner_id' => $this->mobile_partner_id,
            'mobile_organization_id' => $this->mobile_organization_id,
            'subsidiaries' => $this->subsidiaries ? $this->subsidiaries->pluck('name') : [],
            'countries' => $this->countries ? $this->countries->map(function ($country) {
                return [
                    'country_id' => $country->id,
                    'city' => $country->cities ? $country->cities->pluck('id') : [],
                ];
            }) : [],
            'contacts' => $this->contacts->map(function ($contact) {
                return [
                    'id' => $contact->id,
                    'full_name' => $contact->full_name,
                    'phone' => $contact->phone,
                    'email' => $contact->email,
                    'skype' => $contact->skype,
                    'address' => $contact->address,
                ];
            }),
            'employees' => $this->employees->map(function ($employee) {
                return [
                    'id' => $employee->id,
                    'full_time' => $employee->full_time,
                    'part_time' => $employee->part_time,
                    'psychological_consulting' => $employee->psychological_consulting,
                    'legal_consulting' => $employee->legal_consulting,
                    'coaching' => $employee->coaching,
                    'concierge_service' => $employee->concierge_service,
                    'webinars' => $employee->webinars,
                ];
            }),
            'relatives' => $this->relatives->map(function ($relative) {
                return [
                    'id' => $relative->id,
                    'customer_category_id' => $relative->customer_category_id,
                    'psychological_consulting' => $relative->psychological_consulting,
                    'legal_consulting' => $relative->legal_consulting,
                    'coaching' => $relative->coaching,
                    'concierge_service' => $relative->concierge_service,
                    'webinars' => $relative->webinars,
                ];
            }),
        ];
    }
}
