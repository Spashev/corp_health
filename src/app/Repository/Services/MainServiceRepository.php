<?php

declare(strict_types=1);

namespace App\Repository\Services;

use App\Contracts\Services\ServiceRepositoryInterface;
use App\Models\Service;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MainServiceRepository implements ServiceRepositoryInterface
{
    public function getServices(string $type = 'main'): LengthAwarePaginator
    {
        return Service::query()->where(['type' => $type])->paginate(10);
    }

    public function get(int $id): Model|Collection|Builder|array|null
    {
        return Service::query()->findOrFail($id);
    }

    public function getService(int $id, string $type = 'main'): Model|Collection|Builder|array|null
    {
        return Service::query()->where(['type' => $type])->findOrFail($id);
    }

    public function create(Request $request): Model|Builder
    {
        $validatedData = $request->all();
        if ($request->hasFile('label_url')) {
            $validatedData['label_url'] = $request->file('label_url')->store('image', 'public');
        }
        
        return Service::query()->create($validatedData);
    }

    public function update(int $id, Request $request): Model|Collection|Builder|array|null
    {
        $service = $this->get($id);

        $validatedData = $request->all();
        if ($request->hasFile('label_url')) {
            if ($service->label_url) {
                Storage::disk('public')->delete($service->label_url);
            }

            $validatedData['label_url'] = $request->file('label_url')->store('image', 'public');
        }
        $validatedData['is_active'] = $request->get('is_active') ?? false;
        
        $service->update($validatedData);
    
        return $service;
    }
}