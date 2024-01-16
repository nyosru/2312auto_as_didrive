<?php

namespace App\Models\Ar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArPayed extends Model
{
    use HasFactory;

    /**
     * Связанная с моделью таблица.
     *
     * @var string
     */
//    protected $table = 'ar_groups';

    protected $fillable = ['date_start', 'date_end', 'ar_tenant_id', 'ar_object_id'];

}
