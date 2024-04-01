<?php

declare(strict_types=1);

namespace App\Services;

use App\Contracts\Location\CountryRepositoryInterface;
use App\Contracts\Location\LanguageRepositoryInterface;
use Illuminate\Http\Request;

class LanguageService
{
    public function __construct(private readonly LanguageRepositoryInterface $repository)
    {
    }

    public function getLanguages()
    {
        return $this->repository->getLanguages();
    }
}