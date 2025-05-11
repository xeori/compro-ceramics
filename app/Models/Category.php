<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug',
    ];

   protected static function booted()
{
    static::creating(function ($category) {
        $category->slug = Str::slug($category->name);
    });

    static::updating(function ($category) {
        if ($category->isDirty('name')) {
            $category->slug = Str::slug($category->name);
        }
    });
}

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
