<?php

namespace App\Models\Company;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Subsidiary extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
