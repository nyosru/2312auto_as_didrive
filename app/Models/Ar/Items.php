<?php

namespace App\Models\Ar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;

    /**
     * Таблица БД, ассоциированная с моделью.
     *
     * @var string
     */
    protected $table = 'ar_items';

    protected $fillable = ['name','address','group_id'];


    public function prices()
    {
        return $this->hasMany(ArPrice::class, 'ar_object_id', 'id')->orderBy('date_start','desc');
    }

    public function payes()
    {
        return $this->hasMany(ArPay::class,'ar_object_id', 'id')->orderBy('date','desc');
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

}
