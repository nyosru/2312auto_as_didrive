<?php

namespace App\Models\Ar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pays extends Model
{

    use HasFactory;

    protected $fillable = ['amount', 'comment', 'ar_tenant_id', 'ar_object_id', 'date'];


    public function object()
    {
        return $this->belongsTo(Items::class);
    }


}
