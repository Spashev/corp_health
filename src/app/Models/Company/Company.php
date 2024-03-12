<?php

namespace App\Models\Company;

use App\Models\Location\City;
use App\Models\Location\Country;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public function cities(): BelongsToMany
    {
        return $this->belongsToMany(City::class)->withTimestamps();
    }

    public function countries(): BelongsToMany
    {
        return $this->belongsToMany(Country::class)->withTimestamps();
    }
    
    public function contacts(): HasMany
    {
        return $this->hasMany(Contact::class);
    }
    
    public function subsidiaries(): HasMany
    {
        return $this->hasMany(Subsidiary::class);
    }
    
    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }
    
    public function relatives(): HasMany
    {
        return $this->hasMany(Relative::class);
    }
}
