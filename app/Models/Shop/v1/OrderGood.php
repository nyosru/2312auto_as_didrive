<?php

namespace App\Models\Shop\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderGood extends Model
{
    use HasFactory;
    protected $fillable = [
        'good_id',
        'order_id',
        'goodOrigin',
        'price',
        'kolvo'
    ];
    // protected $fillable = ['good_id'];

    /**
     * Получить запись, указанного заказа
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function good()
    {
        return $this->hasOne(Good::class, 'id','good_id');
    }

}
