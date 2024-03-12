<?php

namespace App\Models\Test;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class QuestionAnswer extends Model
{
    use HasFactory;


    protected $table = 'test_question_answers';
    protected $guarded = [];
    
    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }
}
