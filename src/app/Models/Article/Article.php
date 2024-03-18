<?php

declare(strict_types=1);

namespace App\Models\Article;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory;
    
    protected $fillable = [
      'title',  
      'keywords',  
      'description',  
      'label_url',  
      'is_active',  
      'locale',  
      'article_category_id',  
    ];
    
    protected $casts = [
      'is_active' => 'bool',  
    ];
    
    public function category(): BelongsTo
    {
        return $this->belongsTo(ArticleCategory::class);
    }
}
