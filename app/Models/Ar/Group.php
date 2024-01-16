<?php

namespace App\Models\Ar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    /**
     * Связанная с моделью таблица.
     *
     * @var string
     */
    protected $table = 'ar_groups';

    protected $fillable = ['name','address'];

    public function items()
    {
        return $this->hasMany(Items::class);
    }

}
