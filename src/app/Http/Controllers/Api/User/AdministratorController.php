<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\Administrator\StoreAdministratorRequest;
use App\Http\Requests\Users\Administrator\UpdateAdministratorRequest;
use App\Http\Resources\Users\Administrator\GetAdministratorResource;
use App\Http\Resources\Users\Administrator\GetAdministratorsResource;
use App\Http\Resources\Users\Administrator\StoreAdministratorResource;
use App\Models\User;
use App\Services\AdministratorService;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class AdministratorController extends Controller
{
    public function index(AdministratorService $service): AnonymousResourceCollection
    {
        $consultants = $service->getAdministrators();

        return GetAdministratorsResource::collection($consultants);
    }

    public function show(int $id, AdministratorService $service): GetAdministratorResource
    {
        $consultant = $service->getAdministratorById($id);

        return GetAdministratorResource::make($consultant);
    }

    public function store(StoreAdministratorRequest $request, AdministratorService $service): StoreAdministratorResource
    {
        $consultant = $service->createAdministrator($request);

        return StoreAdministratorResource::make($consultant);
    }

    public function update(UpdateAdministratorRequest $request, int $id, AdministratorService $service): GetAdministratorResource
    {
        $consultant = $service->updateAdministrator($id, $request);

        return GetAdministratorResource::make($consultant);
    }

    public function destroy(User $user): Response
    {
        $user->delete();

        return response()->noContent();
    }
}
