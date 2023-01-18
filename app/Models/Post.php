<?php

namespace App\Models;

use App\Models\Scopes\PostScope;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'created_at', 'count_visitor', 'title', 'slug', 'description', 'image', 'category_id', 'user_id', 'status',
    ];

    protected $hidden = [
        'image',
        'updated_at', 'deleted_at',
    ];

    protected $appends = [
        'image_url',
    ];


    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }

    protected static function booted()
    {
        static::creating(function (Post $post) {
            $post->slug = Str::slug($post->title);
            Validator::make($post->toArray(), [
                'slug' => [
                    'required', 'string', 'min:3', 'max:255',
                    Rule::unique('posts', 'slug')->ignore($post->id),
                ],
            ], ['slug' => 'لا يمكن تكرار العنوان'])->validate();
        });

        static::addGlobalScope('user', new PostScope());
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }


    public function tags()
    {
        return $this->belongsToMany(
            Tag::class,     // Related Model
            'post_tag',  // Pivot table name
            'post_id',   // FK in pivot table for the current model
            'tag_id',       // FK in pivot table for the related model
            'id',           // PK current model
            'id'            // PK related model
        );
    }

    public function scopeActive(Builder $builder)
    {
        $builder->where('status', '=', 'active');
    }

    // Accessors
    // $post->image_url
    public function getImageUrlAttribute()
    {
        if (!$this->image) {
            return 'https://www.incathlab.com/images/products/default_product.png';
        }
        if (Str::startsWith($this->image, ['http://', 'https://'])) {
            return $this->image;
        }
        return asset($this->image);
    }


    public function scopeFilter(Builder $builder, $filters)
    {
        $builder->when($filters['title'] ?? false, function ($builder, $value) {
            $builder->where('posts.title', 'LIKE', "%{$value}%");
        });

        $builder->when($filters['description'] ?? false, function ($builder, $value) {
            $builder->where('posts.description', 'LIKE', "%{$value}%");
        });

        $builder->when($filters['status'] ?? false, function ($builder, $value) {
            $builder->where('posts.status', '=', $value);
        });
    }


    public function scopeFilterSearch(Builder $builder, $filters)
    {
        $builder->when($filters['s'] ?? false, function ($builder, $value) {
            $builder->where('posts.title', 'LIKE', "%{$value}%")
                ->orWhere('posts.description', 'LIKE', "%{$value}%");
        });


    }
}
