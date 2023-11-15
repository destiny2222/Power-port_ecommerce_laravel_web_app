<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [    
        'name',
        'price',
        'description',
        'additional_information',
        'SKU',
        'status',
        'slug',
        'category_id',
        'image',
        'cover_image',
      ];



    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getSlugAttribute(): string
    {
        return Str::slug($this->name);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function carts(){
        return $this->hasMany(Cart::class);
    }
}
