<?php

declare(strict_types=1);

namespace App\Contracts\Tests;

use App\Contracts\RepositoryInterface;

interface TestRepositoryInterface extends RepositoryInterface
{
    public function getTests();
}