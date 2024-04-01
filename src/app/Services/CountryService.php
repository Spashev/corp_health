<?php

declare(strict_types=1);

namespace App\Services;

use App\Contracts\Location\CountryRepositoryInterface;
use Illuminate\Http\Request;

class CountryService
{
    public function __construct(private readonly CountryRepositoryInterface $repository)
    {
    }

    public function createCountry(Request $request)
    {
        return $this->repository->create($request);
    }

    public function getCountries()
    {
        return $this->repository->getCountries();
    }

    public function getCountryById(int $id)
    {
        return $this->repository->get($id);
    }

    public function updateCountry(int $id, Request $request)
    {
        return $this->repository->update($id, $request);
    }
}