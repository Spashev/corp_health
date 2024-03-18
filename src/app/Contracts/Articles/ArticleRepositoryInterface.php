<?php

declare(strict_types=1);

namespace App\Contracts\Articles;

use App\Contracts\RepositoryInterface;

interface ArticleRepositoryInterface extends RepositoryInterface
{
    public function getArticles();
}