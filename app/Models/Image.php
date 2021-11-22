<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'image';

    protected $fillable = [
        'url',
        'product_id',
    ];

    public function product(){
        return $this->belongsto('App\Models\product');
    }
}
