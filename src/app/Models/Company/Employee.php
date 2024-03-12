<?php

namespace App\Models\Company;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    
    protected $casts = [
        'full_time' => 'boolean',
        'part_time' => 'boolean',
    ];
    
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
