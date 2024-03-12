<?php

declare(strict_types=1);

namespace App\Models\Test;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    
    protected  $table = 'test_categories';
    protected $guarded = [];

    protected $casts = [
        'is_active' => 'boolean',
    ];
    
    public function test(): hasMany
    {
        return $this->hasMany(Test::class);
    }
}
