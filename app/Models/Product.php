<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'size',
        'category_id',
        'image',
        'slug', // Pastikan slug ada di dalam fillable
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function inspiration()
{
    return $this->belongsTo(Inspiration::class);
}

    public static function boot()
    {
        parent::boot();

        static::saving(function ($product) {
            // Jika ada file gambar, simpan gambar dan setkan path-nya
            if (request()->hasFile('image')) {
                $product->image = request()->file('image')->store('products', 'public');
            }
        });

        static::saved(function ($product) {
            // Setelah produk disimpan, jika slug kosong maka buat slug
            if (empty($product->slug)) {
                $product->slug = Str::slug($product->name);
                $product->save(); // Simpan slug ke dalam database
            }
        });
    }
}
