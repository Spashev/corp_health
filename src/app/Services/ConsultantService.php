<?php

declare(strict_types=1);

namespace App\Services;

use App\Repository\Users\ConsultantRepositoryInterface;
use Illuminate\Http\Request;

class ConsultantService
{
    public function __construct(private readonly ConsultantRepositoryInterface $repository)
    {
    }
    
    public function getConsultants()
    {
        return $this->repository->getConsultants();
    }
    
    public function getConsultantById(int $id)
    {
        return $this->repository->get($id);
    }
    
    public function createConsultant(Request $request)
    {
        return $this->repository->create($request);
    }

    public function updateConsultant(int $id, Request $request)
    {
        return $this->repository->update($id, $request);
    }
}