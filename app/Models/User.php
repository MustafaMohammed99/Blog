<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'password',
        'type'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'user_id', 'id');
    }


    public function scopeFilter(Builder $builder, $filters)
    {
        $builder->when($filters['name'] ?? false, function ($builder, $value) {
            $builder->where('users.name', 'LIKE', "%{$value}%");
        });

        $builder->when($filters['type'] ?? false, function ($builder, $value) {
            $builder->where('users.type', '=', $value);
        });
    }
}
