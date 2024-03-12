<?php

declare(strict_types=1);

namespace App\Repository\Company;

use App\Repository\RepositoryInterface;

interface CustomerRepositoryInterface extends RepositoryInterface
{
    public function getCustomers();
}