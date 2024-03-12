<?php

namespace App\Models\Test;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Test extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    protected $casts = [
        'is_active' => 'boolean',
    ];
    
    public function questions(): HasMany
    {
        return $this->hasMany(Question::class);
    }
    
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    
    public function results(): HasMany
    {
        return $this->hasMany(Result::class);
    }
}
