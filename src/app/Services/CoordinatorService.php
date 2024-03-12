<?php

declare(strict_types=1);

namespace App\Services;

use App\Repository\Users\CoordinatorRepositoryInterface;
use Illuminate\Http\Request;

class CoordinatorService
{
    public function __construct(private readonly CoordinatorRepositoryInterface $repository)
    {
    }
    
    public function getCoordinators()
    {
        return $this->repository->getCoordinators();
    }
    
    public function getCoordinatorById(int $id)
    {
        return $this->repository->get($id);
    }
    
    public function createCoordinator(Request $request)
    {
        return $this->repository->create($request);
    }

    public function updateCoordinator(int $id, Request $request)
    {
        return $this->repository->update($id, $request);
    }
}