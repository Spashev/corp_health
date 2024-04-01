<?php

namespace App\Http\Controllers\Api\Location;

use App\Http\Controllers\Controller;
use App\Http\Requests\Location\StoreCountryRequest;
use App\Http\Requests\Location\UpdateCountryRequest;
use App\Http\Resources\Location\GetCountriesResource;
use App\Http\Resources\Location\GetCountryResource;
use App\Models\Location\Country;
use App\Services\CountryService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CountryController extends Controller
{
    public function index(CountryService $service): AnonymousResourceCollection
    {
        $country = $service->getCountries();

        return GetCountriesResource::collection($country);
    }

    public function store(StoreCountryRequest $request, CountryService $service): GetCountryResource
    {
        $country = $service->createCountry($request);

        return GetCountryResource::make($country);
    }

    public function show(Request $request, int $id, CountryService $service): GetCountryResource
    {
        $country = $service->getCountryById($id);

        return GetCountryResource::make($country);
    }

    public function update(UpdateCountryRequest $request, int $id, CountryService $service): GetCountryResource
    {
        $country = $service->updateCountry($id, $request);

        return GetCountryResource::make($country);
    }

    public function destroy(Country $country): Response
    {
        $country->delete();

        return response()->noContent();
    }
}
