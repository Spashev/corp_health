<?php

namespace App\Models\Company;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Relative extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    
    protected $casts = [
        'partner' => 'boolean',
        'children' => 'boolean',
        'parents' => 'boolean',
        'sisters_brothers' => 'boolean',
        'other' => 'boolean',
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
