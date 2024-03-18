<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\Coordinator\StoreCoordinatorRequest;
use App\Http\Requests\Users\Coordinator\UpdateCoordinatorRequest;
use App\Http\Resources\Users\Coordinator\GetCoordinatorResource;
use App\Http\Resources\Users\Coordinator\GetCoordinatorsResource;
use App\Http\Resources\Users\Coordinator\StoreCoordinatorResource;
use App\Models\User;
use App\Services\CoordinatorService;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class CoordinatorController extends Controller
{
    public function index(CoordinatorService $service): AnonymousResourceCollection
    {
        $coordinators = $service->getCoordinators();
        
        return GetCoordinatorsResource::collection($coordinators);
    }
    
    public function show(int $id, CoordinatorService $service): GetCoordinatorResource
    {
        $coordinator = $service->getCoordinatorById($id);
        
        return GetCoordinatorResource::make($coordinator);
    }

    public function store(StoreCoordinatorRequest $request, CoordinatorService $service): StoreCoordinatorResource
    {
        $coordinator = $service->createCoordinator($request);

        return StoreCoordinatorResource::make($coordinator);
    }

    public function update(UpdateCoordinatorRequest $request, int $id, CoordinatorService $service): GetCoordinatorResource
    {
        $coordinator = $service->updateCoordinator($id, $request);

        return GetCoordinatorResource::make($coordinator);
    }

    public function destroy(User $user): Response
    {
        $user->delete();

        return response()->noContent();
    }
}
