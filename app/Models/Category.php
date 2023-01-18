<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $appends = [
        'image_url',
    ];

    protected $fillable = [
        'name', 'image', 'slug', 'distinctive' ,'status','created_at'
    ];

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }

    protected static function booted()
    {
        static::creating(function (Category $category) {
            $category->slug = Str::slug($category->name);
        });
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'category_id', 'id');
    }


    public function scopeActive(Builder $builder)
    {
        $builder->where('status', '=', 'active');
    }

    public function scopeFilter(Builder $builder, $filters)
    {
        $builder->when($filters['name'] ?? false, function ($builder, $value) {
            $builder->where('categories.name', 'LIKE', "%{$value}%");
        });

        $builder->when($filters['status'] ?? false, function ($builder, $value) {
            $builder->where('categories.status', '=', $value);
        });
    }


    // Accessors
    public function getImageUrlAttribute()
    {
        if (!$this->image) {
            return 'https://www.incathlab.com/images/products/default_product.png';
        }
        if (Str::startsWith($this->image, ['http://', 'https://'])) {
            return $this->image;
        }
        return asset($this->image);
        // return asset('storage/' . $this->image);
    }
}
