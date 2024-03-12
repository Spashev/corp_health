<?php

declare(strict_types=1);

namespace App\Repository\Tests;

use App\Repository\RepositoryInterface;

interface TestRepositoryInterface extends RepositoryInterface
{
    public function getTests();
}