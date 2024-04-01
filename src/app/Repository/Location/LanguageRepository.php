<?php

declare(strict_types=1);

namespace App\Repository\Location;

use App\Contracts\Location\LanguageRepositoryInterface;
use App\Models\Location\Language;
use Illuminate\Database\Eloquent\Collection;

class LanguageRepository implements LanguageRepositoryInterface
{
    public function getLanguages(): Collection|array
    {
        return Language::query()->get();
    }
}