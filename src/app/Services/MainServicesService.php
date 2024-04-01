<?php

declare(strict_types=1);

namespace App\Services;

use App\Contracts\Services\ServiceRepositoryInterface;
use Illuminate\Http\Request;

class MainServicesService
{
    public function __construct(private readonly ServiceRepositoryInterface $repository)
    {
    }

    public function createService(Request $request)
    {
        return $this->repository->create($request);
    }

    public function getServices(string $type)
    {
        return $this->repository->getServices($type);
    }

    public function getServiceById(int $id, string $type)
    {
        return $this->repository->getService($id, $type);
    }

    public function updateService(int $id, Request $request)
    {
        return $this->repository->update($id, $request);
    }
}