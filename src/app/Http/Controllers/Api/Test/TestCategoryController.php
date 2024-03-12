<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Test;

use App\Http\Controllers\Controller;
use App\Http\Requests\Test\StoreTestCategoryRequest;
use App\Http\Requests\Test\UpdateTestCategoryRequest;
use App\Http\Resources\Tests\TestCategoriesResource;
use App\Http\Resources\Tests\TestCategoryResource;
use App\Models\Test\Category;
use App\Services\TestCategoryService;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class TestCategoryController extends Controller
{
    public function index(TestCategoryService $service): AnonymousResourceCollection
    {
        $categories = $service->getCategories();
        
        return TestCategoriesResource::collection($categories);
    }

    public function store(StoreTestCategoryRequest $request, TestCategoryService $service): TestCategoryResource
    {
        $category = $service->createCategory($request);

        return TestCategoryResource::make($category);
    }

    public function show(int $id, TestCategoryService $service): TestCategoryResource
    {

        $test = $service->getCategoryById($id);

        return TestCategoryResource::make($test);
    }

    public function update(UpdateTestCategoryRequest $request, int $id, TestCategoryService $service): TestCategoryResource
    {
        $category = $service->updateCategory($id, $request);
        
        return TestCategoryResource::make($category);
    }

    public function destroy(Category $category): Response
    {
        $category->delete();

        return response()->noContent();
    }
}
