<?php

namespace App\Models\Didrive\Shop\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    /**
     * Определяет, следует ли включать временные метки (created_at и updated_at).
     *
     * @var bool
     */
    public $timestamps = true;

    protected $fillable = ['text', 'order_id'];

    /**
     * Таблица БД, ассоциированная с моделью.
     *
     * @var string
     */
//    protected $table = 'mod_021_items';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function order()
    {
//        return $this->belongsTo(Comment::class, 'a_id', 'a_categoryid');
        return $this->belongsTo(Order::class);
    }

}
