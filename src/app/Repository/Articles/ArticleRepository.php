<?php

declare(strict_types=1);

namespace App\Repository\Articles;

use App\Contracts\Articles\ArticleRepositoryInterface;
use App\Models\Article\Article;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleRepository implements ArticleRepositoryInterface
{
    public function getArticles(): LengthAwarePaginator
    {
        return Article::query()->paginate(10);
    }

    public function get(int $id): Model|Collection|Builder|array|null
    {
        return Article::query()->findOrFail($id);
    }

    public function create(Request $request): Model|Builder
    {
        $validatedData = $request->all();
        if ($request->hasFile('label_url')) {
            $validatedData['label_url'] = $request->file('label_url')->store('image', 'public');
        }
    
        return Article::query()->create($validatedData);
    }

    public function update(int $id, Request $request): Model|Collection|Builder|array|null
    {
        $article = $this->get($id);
        $validatedData = $request->all();
        if ($request->hasFile('label_url')) {
            if ($article->label_url) {
                Storage::disk('public')->delete($article->label_url);
            }
            
            $validatedData['label_url'] = $request->file('label_url')->store('image', 'public');
        }
        
        $article->update($validatedData);
        
        return $article;
    }
}