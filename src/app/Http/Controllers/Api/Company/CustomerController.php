<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Company;

use App\Http\Controllers\Controller;
use App\Http\Requests\Company\Customer\StoreCustomerRequest;
use App\Http\Requests\Company\Customer\UpdateCustomerRequest;
use App\Http\Resources\Company\Customer\GetCustomerResource;
use App\Http\Resources\Company\Customer\GetCustomersResource;
use App\Models\Company\Customer;
use App\Services\CustomerService;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class CustomerController extends Controller
{
    public function index(CustomerService $service): AnonymousResourceCollection
    {
        $tests = $service->getCustomers();

        return GetCustomersResource::collection($tests);
    }

    public function store(StoreCustomerRequest $request, CustomerService $service): GetCustomerResource
    {
        $notes = $service->createCustomer($request);

        return GetCustomerResource::make($notes);
    }

    public function show(Request $request, int $id, CustomerService $service): GetCustomerResource
    {
        $test = $service->getCustomerById($id);

        return GetCustomerResource::make($test);
    }

    public function update(UpdateCustomerRequest $request, int $id, CustomerService $service): GetCustomerResource
    {
        $note = $service->updateCustomer($id, $request);

        return GetCustomerResource::make($note);
    }

    public function destroy(Customer $test): Response
    {
        $test->delete();

        return response()->noContent();
    }
}
