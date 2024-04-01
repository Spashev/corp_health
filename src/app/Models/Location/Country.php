<?php

namespace App\Models\Location;

use App\Models\User\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Country extends Model
{
    use HasFactory;
    
    protected $fillable = [
      'name',
      'code'  
    ];
    
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
    
    public function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }

    public function language(): HasOne
    {
        return $this->hasOne(Language::class, 'country_code', 'code');
    }
}
