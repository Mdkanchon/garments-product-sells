<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [];


    public function order_list()
    {
        return $this->hasMany(OrderList::class, 'order_id', 'id');
    }
}
