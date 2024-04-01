<?php

namespace App\Http\Controllers\Api\Location;

use App\Http\Controllers\Controller;
use App\Http\Resources\Location\GetLanguagesResource;
use App\Services\LanguageService;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class LanguageController extends Controller
{
    public function index(LanguageService $service): AnonymousResourceCollection
    {
        $country = $service->getLanguages();

        return GetLanguagesResource::collection($country);
    }
}
