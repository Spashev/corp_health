<?php

declare(strict_types=1);

namespace App\Repository\Tests;

use App\Repository\RepositoryInterface;

interface TestCategoryRepositoryInterface extends RepositoryInterface
{
    public function getCategories();
}