<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $table = 'voucher';

    protected $fillable = ['name','description','amount'];

    public function User(){
        return $this->belongsTo('App\Models\User', 'forigen_key', 'local_key');
    }
}
