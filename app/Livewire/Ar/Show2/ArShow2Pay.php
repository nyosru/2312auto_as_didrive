<?php

namespace App\Livewire\Ar\Show2;

use App\Models\Ar\ArPay;
use App\Models\Ar\ArPrice;
use Livewire\Component;

class ArShow2Pay extends Component
{

    public $price;
    public static $in = [];

    public static function getData( $object_id, $tenant_id, $date_start )
    {
        return ArPay::
        where('ar_object_id', $object_id)->
        where('ar_tenant_id', $tenant_id)->
//        addSelect(['id', 'name', 'address'])->
//        orderBy('name')->
        get();
//        return \App\Models\Ar\Group::addSelect(['name','address'])->all();
    }

    public function render()
    {

        self::$in['pays'] = self::getData($this->price['ar_object_id'],$this->price['ar_tenant_id'],date('Y-m-d'));
        return view('livewire.ar.show2.ar-show2-pay',self::$in);
    }
}
