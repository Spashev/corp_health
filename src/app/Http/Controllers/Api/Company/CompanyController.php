<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Company;

use App\Http\Controllers\Controller;
use App\Http\Requests\Company\StoreCompanyRequest;
use App\Http\Requests\Company\UpdateCompanyRequest;
use App\Http\Resources\Company\GetCompaniesResource;
use App\Http\Resources\Company\GetCompanyResource;
use App\Models\Company\Customer;
use App\Services\CompanyService;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class CompanyController extends Controller
{
    public function index(CompanyService $service): AnonymousResourceCollection
    {
        $tests = $service->getCompanies();

        return GetCompaniesResource::collection($tests);
    }

    public function store(StoreCompanyRequest $request, CompanyService $service): GetCompanyResource
    {
        $notes = $service->createCompany($request);

        return GetCompanyResource::make($notes);
    }

    public function show(Request $request, int $id, CompanyService $service): GetCompanyResource
    {
        $test = $service->getCompanyById($id);

        return GetCompanyResource::make($test);
    }

    public function update(UpdateCompanyRequest $request, int $id, CompanyService $service): GetCompanyResource
    {
        $note = $service->updateCompany($id, $request);

        return GetCompanyResource::make($note);
    }

    public function destroy(Customer $test): Response
    {
        $test->delete();

        return response()->noContent();
    }
}
