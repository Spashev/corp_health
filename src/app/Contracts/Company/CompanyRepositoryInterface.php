<?php

declare(strict_types=1);

namespace App\Contracts\Company;

use App\Contracts\RepositoryInterface;

interface CompanyRepositoryInterface extends RepositoryInterface
{
    public function getCompanies();
}