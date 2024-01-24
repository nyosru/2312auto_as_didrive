<?php

namespace App\Models\Shop\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderComment extends Model
{
    use HasFactory;

    /**
     * Имя соединения, которое будет использоваться для данной модели.
     *
     * @var string
     */
    protected $connection = 'mysql_site';


    /**
     * Получить запись, указанного заказа
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
