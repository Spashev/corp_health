<?php

namespace App\Models\User;

use App\Models\Location\Country;
use App\Models\Test\Builder\UserQueryBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'email',
        'phone',
        'role',
        'access',
        'password',
        'country_id',
        'city_id'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function getFullNameAttribute(): string
    {
        return sprintf('%s %s %s', $this->first_name, $this->last_name, $this->middle_name);
    }
    
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function logs(): HasMany
    {
        return $this->hasMany(UserActionLog::class);
    }
    
    public function newEloquentBuilder($query): UserQueryBuilder
    {
        return new UserQueryBuilder($query);
    }
}
