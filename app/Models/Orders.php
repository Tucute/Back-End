<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $table = 'orders';

    protected $fillable=[
        'status',
        'date_order',
        'payment_method',
        'total_price',
        'user_id',
    ];
    protected $with = ['orderDetails'];

    public function user() {
        return $this->belongsTo(Users::class,'user_id');
    }
    public function orderDetails() {
        return $this->hasMany(Orders_detail::class,'order_id');
    }
}
