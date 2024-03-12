<?php

declare(strict_types=1);

namespace App\Repository\Company;

use App\Repository\RepositoryInterface;

interface CompanyRepositoryInterface extends RepositoryInterface
{
    public function getCompanies();
}