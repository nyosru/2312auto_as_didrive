<?php

namespace App\Models\Ar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArPrice extends Model
{
    use HasFactory;


    public function item()
    {
        return $this->belongsTo(Items::class);
    }

    public function tenant()
    {
        return $this->hasMany(Tenant::class, 'id', 'ar_tenant_id');
    }


//    public function brand()
//    {
//        return $this->belongsTo(Brand::class);
//    }

}
