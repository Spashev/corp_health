<?php

declare(strict_types=1);

namespace App\Services;

use App\Repository\Tests\TestRepositoryInterface;
use Illuminate\Http\Request;

class TestService
{
    public function __construct(private readonly TestRepositoryInterface $repository)
    {
    }

    public function createTest(Request $request)
    {
        return $this->repository->create($request);
    }

    public function getTests()
    {
        return $this->repository->getTests();
    }

    public function getTestById(int $id)
    {
        return $this->repository->get($id);
    }

    public function updateTest(int $id, Request $request)
    {
        return $this->repository->update($id, $request);
    }
}