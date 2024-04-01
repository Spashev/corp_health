<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'description',
        'offer',
        'is_active',
        'locale', 
        'label_url',
        'type'
    ];
    
    protected $casts = [
        'is_active' => 'bool'  
    ];
}
