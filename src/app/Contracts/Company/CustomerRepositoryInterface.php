<?php

declare(strict_types=1);

namespace App\Contracts\Company;

use App\Contracts\RepositoryInterface;

interface CustomerRepositoryInterface extends RepositoryInterface
{
    public function getCustomers();
}