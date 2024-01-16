<?php

namespace App\Livewire\Ar\Show2;

use App\Models\Ar\ArPrice;
use App\Models\Ar\Tenant;
use Livewire\Component;

class ArShow2Price extends Component
{

    public $object;
    public static $in = [];

    public static function getData($object_id)
    {
        return ArPrice::
        where('ar_object_id', $object_id)->
//        addSelect(['id', 'name', 'address'])->
//        orderBy('name')->
        get();
//        return \App\Models\Ar\Group::addSelect(['name','address'])->all();
    }

    public function render()
    {

        self::$in['prices'] = self::getData($this->object['id']);
        return view('livewire.ar.show2.ar-show2-price',self::$in);
    }
}
