<?php

declare(strict_types=1);

namespace App\Services;

use App\Repository\Company\CustomerRepositoryInterface;
use Illuminate\Http\Request;

class CustomerService
{
    public function __construct(private readonly CustomerRepositoryInterface $repository)
    {
    }

    public function createCustomer(Request $request)
    {
        return $this->repository->create($request);
    }

    public function getCustomers()
    {
        return $this->repository->getCustomers();
    }

    public function getCustomerById(int $id)
    {
        return $this->repository->get($id);
    }

    public function updateCustomer(int $id, Request $request)
    {
        return $this->repository->update($id, $request);
    }
}