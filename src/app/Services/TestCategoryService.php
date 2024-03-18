<?php

declare(strict_types=1);

namespace App\Services;

use App\Contracts\Tests\TestCategoryRepositoryInterface;
use Illuminate\Http\Request;

class TestCategoryService
{
    public function __construct(private readonly TestCategoryRepositoryInterface $repository)
    {
    }

    public function createCategory(Request $request)
    {
        return $this->repository->create($request);
    }

    public function getCategories()
    {
        return $this->repository->getCategories();
    }

    public function getCategoryById(int $id)
    {
        return $this->repository->get($id);
    }
    
    public function updateCategory(int $id, Request $request)
    {
        return $this->repository->update($id, $request);
    }
}