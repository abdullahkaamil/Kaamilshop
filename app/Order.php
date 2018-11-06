<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
protected $guarded = [];
    // relation between user order and product
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function OrderItems(){
        return $this->hasMany(OrderItems::class);
    }
    public function products(){
        return $this->belongsToMany(Product::class, 'order_items');
    }
}
