<?php

declare(strict_types=1);

namespace App\Repository\Users;

use App\Enum\UserAccess;
use App\Enum\UserRole;
use App\Models\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class AdministratorRepository implements AdministratorRepositoryInterface
{
    public function get(int $id): Model|Collection|Builder|array|null
    {
        return User::query()->whereAdministrator()->findOrFail($id);
    }
    
    public function getAdministrators(): LengthAwarePaginator
    {
        return User::query()->whereAdministrator()->paginate(10);
    }

    public function create(Request $request): Model|Builder
    {
        $access = !$request->get('access') ? UserAccess::MOBILE : UserAccess::values()[$request->get('access')];
        
        return User::query()->create([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'middle_name' => $request->get('middle_name') ?? '',
            'email' => $request->get('email'),
            'phone' => $request->get('phone') ?? '',
            'role' => UserRole::ADMINISTRATOR,
            'access' => $access,
            'country_id' => $request->get('country_id'),
            'password' => bcrypt($request->get('password'))
        ]);
    }

    public function update(int $id, Request $request): Model|Collection|Builder|array|null
    {
        $user = User::query()->whereAdministrator()->findOrFail($id);
        $data = collect($request->only([
            'first_name',
            'last_name',
            'middle_name',
            'email',
            'phone',
            'access',
            'country_id',
            'password'
        ]))
            ->filter()
            ->toArray();

        $user->update($data);
        
        return $user;
    }
}