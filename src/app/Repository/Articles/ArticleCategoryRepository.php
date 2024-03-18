<?php

declare(strict_types=1);

namespace App\Repository\Articles;

use App\Contracts\Tests\TestCategoryRepositoryInterface;
use App\Models\Test\Category;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ArticleCategoryRepository implements TestCategoryRepositoryInterface
{
    public function getCategories(): LengthAwarePaginator
    {
        return Category::query()->paginate(10);
    }

    public function get(int $id): Model|Collection|Builder|array|null
    {
        return Category::query()->findOrFail($id);
    }

    public function create(Request $request): Model|Builder
    {
        return Category::query()->create($request->all());
    }

    public function update(int $id, Request $request): Model|Collection|Builder|array|null
    {
        $test = $this->get($id);
        $test->update($request->all());
        
        return $test;
    }
}