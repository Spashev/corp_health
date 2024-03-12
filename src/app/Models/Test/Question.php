<?php

namespace App\Models\Test;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
    use HasFactory;
    
    protected $table = 'test_questions';
    protected $guarded = [];
    
    public function test(): BelongsTo
    {
        return $this->belongsTo(Test::class);
    }
    
    public function answers(): HasMany
    {
        return $this->hasMany(QuestionAnswer::class);
    }
}
