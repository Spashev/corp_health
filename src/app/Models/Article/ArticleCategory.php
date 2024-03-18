<?php

declare(strict_types=1);

namespace App\Models\Article;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ArticleCategory extends Model
{
    use HasFactory;
    
    protected $fillable = [
      'title',  
      'locale',  
      'article_category_id',  
    ];
    
    protected $casts = [
      'is_active' => 'bool',  
    ];
    
    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }
}
