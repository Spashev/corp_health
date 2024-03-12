<?php

declare(strict_types=1);

namespace App\Repository\Company;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Company\Customer;

class CustomerRepository implements CustomerRepositoryInterface
{
    public function getCustomers(): LengthAwarePaginator
    {
        return Customer::query()->paginate(10);
    }

    public function get(int $id): Model|Collection|Builder|array|null
    {
        return Customer::query()->findOrFail($id);
    }

    public function create(Request $request): Model|Builder
    {
        return Customer::query()->create($request->all());
    }

    public function update(int $id, Request $request): Model|Collection|Builder|array|null
    {
        $test = $this->get($id);
        $test->update($request->all());

        return $test;
    }
}