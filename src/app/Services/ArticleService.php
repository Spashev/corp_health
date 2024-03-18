<?php

declare(strict_types=1);

namespace App\Services;

use App\Contracts\Articles\ArticleRepositoryInterface;
use Illuminate\Http\Request;

class ArticleService
{
    public function __construct(private readonly ArticleRepositoryInterface $repository)
    {
    }

    public function createArticle(Request $request)
    {
        return $this->repository->create($request);
    }

    public function getCategories()
    {
        return $this->repository->getArticles();
    }

    public function getArticleById(int $id)
    {
        return $this->repository->get($id);
    }
    
    public function updateArticle(int $id, Request $request)
    {
        return $this->repository->update($id, $request);
    }
}