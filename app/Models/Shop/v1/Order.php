<?php

namespace App\Models\Shop\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'status'
    ];


    /**
     * Получить каталог
     */
    public function user()
    {
        // return $this->belongsTo(User::class, 'id', 'a_categoryid');
        return $this->belongsTo(User::class);
    }

    /**
     * Получить товары к заказу
     */
    public function orderGoods()
    {
//        return $this->belongsTo(OrderGood::class, 'id', 'order_id');
        return $this->hasMany(OrderGood::class, 'order_id', 'id');
    }
}
