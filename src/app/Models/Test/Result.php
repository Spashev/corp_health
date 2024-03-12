<?php

namespace App\Models\Test;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Result extends Model
{
    use HasFactory;
    
    protected $table = 'test_results';
    protected $guarded = [];
    
    public function test(): BelongsTo
    {
       return $this->belongsTo(Test::class); 
    }
}
