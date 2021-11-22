<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['name', 'price', 'description', 'image', 'amount', 'category_id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function image(){
        return $this->hasOne(Image::class);
    }
}
