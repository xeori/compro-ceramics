<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Inspiration extends Model
{
protected $fillable = [
    'name',
    'slug',
    'image_path',
];
public function products()
{
    return $this->hasMany(Product::class);
}

protected static function boot()
{
    parent::boot();

    static::saving(function ($model) {
        if (empty($model->slug)) {
            $model->slug = Str::slug($model->name);
        }
    });
}
    /**
     * Get the URL of the inspiration image.
     *
     * @return string
     */

}
