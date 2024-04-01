<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Services;

use App\Http\Controllers\Controller;
use App\Http\Requests\Services\StoreMainServiceRequest;
use App\Http\Requests\Services\UpdateMainServiceRequest;
use App\Http\Resources\Services\GetMainServiceResource;
use App\Http\Resources\Services\GetMainServicesResource;
use App\Models\Service;
use App\Services\MainServicesService;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class AdditionalServiceController extends Controller
{
    public function index(Request $request, MainServicesService $service): AnonymousResourceCollection
    {
        $type = $request->segment(3);
        $tests = $service->getServices($type);

        return GetMainServicesResource::collection($tests);
    }

    public function store(StoreMainServiceRequest $request, MainServicesService $service): GetMainServiceResource
    {
        $services = $service->createService($request);

        return GetMainServiceResource::make($services);
    }

    public function show(Request $request, int $id, MainServicesService $service): GetMainServiceResource
    {
        $type = $request->segment(3);
        $test = $service->getServiceById($id, $type);

        return GetMainServiceResource::make($test);
    }

    public function update(UpdateMainServiceRequest $request, int $id, MainServicesService $service): GetMainServiceResource
    {
        $services = $service->updateService($id, $request);

        return GetMainServiceResource::make($services);
    }

    public function destroy(Service $service): Response
    {
        $service->delete();

        return response()->noContent();
    }
}
