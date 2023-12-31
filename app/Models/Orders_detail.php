<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders_detail extends Model
{
    use HasFactory;
    protected $table = 'order_details';

    protected $fillable=[
        'order_id',
        'product_id',
        'quantity',
        'unit_price',
    ];
    public function order() {
        return $this->belongsTo(Orders::class,'order_id');
    }
    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }
}
