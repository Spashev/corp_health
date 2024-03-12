<?php

declare(strict_types=1);

namespace App\Services;

use App\Repository\Users\AdministratorRepositoryInterface;
use Illuminate\Http\Request;

class AdministratorService
{
    public function __construct(private readonly AdministratorRepositoryInterface $repository)
    {
    }
    
    public function getAdministrators()
    {
        return $this->repository->getAdministrators();
    }
    
    public function getAdministratorById(int $id)
    {
        return $this->repository->get($id);
    }
    
    public function createAdministrator(Request $request)
    {
        return $this->repository->create($request);
    }

    public function updateAdministrator(int $id, Request $request)
    {
        return $this->repository->update($id, $request);
    }
}