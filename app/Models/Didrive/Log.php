<?php

namespace App\Models\Didrive;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Log extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'didrive_logs';

    protected $fillable = [
        'model',
        'model_id',
        'type',
        'msg'
    ];
}
