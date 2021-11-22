<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order_Detail extends Model
{
    protected $table = 'order_detail';

    protected $fillable = [
        'product_id',
        'amount',
        'unit_price', 
        'order_id',
        'product_id',
    ];

    public function Product() {
        return $this->belongsTo('App\Models\Product', 'forigen_key', 'local_key');
    }

    public function Order(){
        return $this->belongsTo('App\Models\Order', 'forigen_key', 'local_key');
    }
}
