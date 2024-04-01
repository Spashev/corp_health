<?php

declare(strict_types=1);

namespace App\Contracts\Location;

use App\Contracts\RepositoryInterface;

interface CountryRepositoryInterface extends RepositoryInterface
{
    public function getCountries();
}