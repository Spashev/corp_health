<?php

declare(strict_types=1);

namespace App\Repository\Company;

use App\Contracts\Company\CompanyRepositoryInterface;
use App\Models\Company\Company;
use App\Models\Company\Contact;
use App\Models\Company\Employee;
use App\Models\Company\Relative;
use App\Models\Company\Subsidiary;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyRepository implements CompanyRepositoryInterface
{
    public function getCompanies(): LengthAwarePaginator
    {
        return Company::query()->with(['subsidiaries', 'countries', 'contacts', 'employees', 'relatives'])->paginate(10);
    }

    public function get(int $id): Model|Collection|Builder|array|null
    {
        return Company::query()->with(['subsidiaries', 'countries', 'contacts', 'employees', 'relatives'])->findOrFail($id);
    }

    public function create(Request $request): Model|Builder
    {
        return DB::transaction(static function () use ($request) {
            $company = Company::query()->create([
                'status' => $request->get('status'),
                'company_identify' => $request->get('company_identify'),
                'customer_id' => $request->get('customer_id'),
                'company_code' => $request->get('company_code'),
                'name' => $request->get('name'),
                'name_en' => $request->get('name_en'),
                'contract_period' => $request->get('contract_period'),
                'signature_date' => $request->get('signature_date'),
                'feedback_link' => $request->get('feedback_link'),
                'mobile_app' => $request->get('mobile_app'),
                'mobile_company_code' => $request->get('mobile_company_code'),
                'mobile_manager_code' => $request->get('mobile_manager_code'),
                'mobile_partner_id' => $request->get('mobile_partner_id'),
                'mobile_organization_id' => $request->get('mobile_organization_id'),
            ]);

            foreach ($request->get('subsidiaries') as $subsidiary) {
                Subsidiary::query()->create([
                    'name' => $subsidiary['name'],
                    'company_id' => $company->id
                ]);
            }
            
            foreach ($request->get('employees') as $employee) {
                Employee::query()->create($employee + ['company_id' => $company->id]);
            }

            foreach ($request->get('contacts') as $contact) {
                Contact::query()->create($contact + ['company_id' => $company->id]);
            }

            foreach ($request->get('relatives') as $relative) {
                Relative::query()->create($relative + ['company_id' => $company->id]);
            }

            foreach ($request->get('countries') as $country) {
                $company->countries()->attach($country['country_id']);
                foreach ($country['city'] as $city) {
                    $company->cities()->attach($city['city_id']);
                }
            }

            return $company;
        });
    }

    public function update(int $id, Request $request): Model|Collection|Builder|array|null
    {
        return DB::transaction(static function () use ($request, $id) {
            $company = Company::query()->findOrFail($id);

            $companyData = collect($request->only([
                'status',
                'company_identify',
                'customer_id',
                'company_code',
                'name',
                'name_en',
                'contract_period',
                'signature_date',
                'feedback_link',
                'mobile_app',
                'mobile_company_code',
                'mobile_manager_code',
                'mobile_partner_id',
                'mobile_organization_id',
            ]))
                ->filter()
                ->toArray();

            $company->fill($companyData)->save();

            if ($request->has('subsidiaries')) {
                foreach ($request->get('subsidiaries') as $subsidiary) {
                    Subsidiary::query()->updateOrCreate([
                        'name' => $subsidiary['name'],
                        'company_id' => $company->id
                    ]);
                }
            }

            if ($request->has('contacts')) {
                foreach ($request->get('contacts') as $contact) {
                    Contact::query()->updateOrCreate($contact + ['company_id' => $company->id]);
                }
            }

            if ($request->has('employees')) {
                foreach ($request->get('employees') as $employee) {
                    Employee::query()->updateOrCreate($employee + ['company_id' => $company->id]);
                }
            }
            if ($request->has('relatives')) {
                foreach ($request->get('relatives') as $relative) {
                    Relative::query()->updateOrCreate($relative + ['company_id' => $company->id]);
                }
            }

            if ($request->has('countries')) {
                foreach ($request->get('countries') as $country) {
                    $company->countries()->attach($country['country_id']);
                    foreach ($country['city'] as $city) {
                        $company->cities()->attach($city['city_id']);
                    }
                }
            }

            return $company;
        });
    }
}