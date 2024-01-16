<?php

namespace App\Models\Ar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArPay extends Model
{
    use HasFactory;

    /**
     * Связанная с моделью таблица.
     *
     * @var string
     */
    protected $table = 'ar_pays';

    public function object()
    {
        return $this->belongsTo(ArObject::class , 'ar_object_id' , 'id');
//        return $this->belongsTo(ArObject::class , 'ar_object_id' , 'id');
    }

    public function tenant()
    {
        return $this->belongsTo(Tenant::class , 'ar_tenant_id' , 'id');
    }

}
