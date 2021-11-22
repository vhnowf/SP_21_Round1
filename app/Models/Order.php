<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';

    public function Order_Detail(){
        return $this->hasMany('App\Models\Order_Detail', 'order_id');
    }

    public function User(){
        return $this->belongsTo('App\Models\User', 'forigen_key', 'local_key');
    }
}
