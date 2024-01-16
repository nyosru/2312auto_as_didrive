<?php

namespace App\Livewire\Ar\Show2;

use App\Models\Ar\ArPayed;
use Livewire\Component;

class ArShow2Payed extends Component
{

    public $tenant_id;
    public $object_id;


    public static $in = [];

    public static function getData($object_id, $tenant_id)
    {
        return ArPayed::
        where('ar_object_id', $object_id)->
        where('ar_tenant_id', $tenant_id)->
//        addSelect(['id', 'name', 'address'])->
        orderBy('date_start', 'DESC')->
        get();
//        return \App\Models\Ar\Group::addSelect(['name','address'])->all();
    }

    public function render()
    {

        self::$in['payeds'] = self::getData($this->object_id, $this->tenant_id);
        return view('livewire.ar.show2.ar-show2-payed', self::$in);
    }
}
