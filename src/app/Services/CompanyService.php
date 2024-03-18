<?php

declare(strict_types=1);

namespace App\Services;

use App\Contracts\Company\CompanyRepositoryInterface;
use Illuminate\Http\Request;

class CompanyService
{
    public function __construct(private readonly CompanyRepositoryInterface $repository)
    {
    }

    public function createCompany(Request $request)
    {
        return $this->repository->create($request);
    }

    public function getCompanies()
    {
        return $this->repository->getCompanies();
    }

    public function getCompanyById(int $id)
    {
        return $this->repository->get($id);
    }

    public function updateCompany(int $id, Request $request)
    {
        return $this->repository->update($id, $request);
    }
}