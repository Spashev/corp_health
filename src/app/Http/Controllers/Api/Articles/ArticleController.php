<?php

namespace App\Http\Controllers\Api\Articles;

use App\Http\Controllers\Controller;
use App\Http\Requests\Articles\StoreArticleRequest;
use App\Http\Requests\Articles\UpdateArticleRequest;
use App\Http\Resources\Article\GetArticleResource;
use App\Http\Resources\Article\GetArticlesResource;
use App\Models\Article\Article;
use App\Services\ArticleService;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class ArticleController extends Controller
{
    public function index(ArticleService $service): AnonymousResourceCollection
    {
        $categories = $service->getCategories();

        return GetArticlesResource::collection($categories);
    }

    public function store(StoreArticleRequest $request, ArticleService $service): GetArticleResource
    {
        $category = $service->createArticle($request);

        return GetArticleResource::make($category);
    }

    public function show(int $id, ArticleService $service): GetArticleResource
    {

        $test = $service->getArticleById($id);

        return GetArticleResource::make($test);
    }

    public function update(UpdateArticleRequest $request, int $id, ArticleService $service): GetArticleResource
    {
        $category = $service->updateArticle($id, $request);

        return GetArticleResource::make($category);
    }

    public function destroy(Article $category): Response
    {
        $category->delete();

        return response()->noContent();
    }
}
