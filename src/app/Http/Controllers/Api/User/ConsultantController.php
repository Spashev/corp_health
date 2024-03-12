<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\Consultant\StoreConsultantRequest;
use App\Http\Requests\Users\Consultant\UpdateConsultantRequest;
use App\Http\Resources\Users\Consultant\GetConsultantResource;
use App\Http\Resources\Users\Consultant\GetConsultantsResource;
use App\Http\Resources\Users\Consultant\StoreConsultantResource;
use App\Models\User;
use App\Services\ConsultantService;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class ConsultantController extends Controller
{
    public function index(ConsultantService $service): AnonymousResourceCollection
    {
        $consultants = $service->getConsultants();

        return GetConsultantsResource::collection($consultants);
    }

    public function show(int $id, ConsultantService $service): GetConsultantResource
    {
        $consultant = $service->getConsultantById($id);

        return GetConsultantResource::make($consultant);
    }

    public function store(StoreConsultantRequest $request, ConsultantService $service): StoreConsultantResource
    {
        $consultant = $service->createConsultant($request);

        return StoreConsultantResource::make($consultant);
    }

    public function update(UpdateConsultantRequest $request, int $id, ConsultantService $service): GetConsultantResource
    {
        $consultant = $service->updateConsultant($id, $request);

        return GetConsultantResource::make($consultant);
    }

    public function destroy(User $user): Response
    {
        $user->delete();

        return response()->noContent();
    }
}
