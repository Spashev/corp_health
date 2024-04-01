<?php

declare(strict_types=1);

namespace App\Repository\Location;

use App\Contracts\Location\CountryRepositoryInterface;
use App\Models\Location\Country;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CountryRepository implements CountryRepositoryInterface
{
    public function getCountries(): LengthAwarePaginator
    {
        return Country::query()->with('cities')->paginate(10);
    }

    public function get(int $id): Model|Collection|Builder|array|null
    {
        return Country::query()->with('cities')->findOrFail($id);
    }

    public function create(Request $request): Model|Builder
    {
        return DB::transaction(static function () use ($request) {
            $country = Country::query()->create([
                'name' => $request->get('name'),
                'code' => $request->get('code'),
            ]);
    
            foreach ($request->get('cities') as $result) {
                $country->cities()->create([
                    'name' => $result['name'], 
                    'postcode' => $result['postcode'],
                ]);
            }
    
            return $country;
        });
    }

    public function update(int $id, Request $request): Model|Collection|Builder|array|null
    {
        return DB::transaction(static function () use ($request, $id) {
            $country = Country::query()->findOrFail($id);

            $countryData = collect($request->only(['name', 'code']))
                ->filter()
                ->toArray();

            $country->update($countryData);

            if ($request->has('cities')) {
                foreach ($request->get('cities') as $cityData) {
                    if (isset($cityData['id'])) {
                        $city = $country->cities()->find($cityData['id']);
                    } else {
                        $city = null;
                    }
                    if ($city) {
                        $city->update($cityData);
                    } else {
                        $city->cities()->create($cityData);
                    }
                }
            }
    
            return $country;
        });
    }
}