<?php

namespace App\Livewire\Ar\Show2;

use Livewire\Component;

class ArObject extends Component
{

    public static $in = [];
    public $group;

    public function getData(int $group_id)
    {
//        dd( $this->group['id']);
        return \App\Models\Ar\ArObject::
        where('group_id', $group_id)->
//        addSelect(['id', 'name', 'address'])->
//        orderBy('name')->
        get();
//        return \App\Models\Ar\Group::addSelect(['name','address'])->all();
    }

    public function render()
    {

//        if (!empty($this->group['id']))
        self::$in['objects'] = $this->getData($this->group['id']);

        return view('livewire.ar.show2.ar-object', self::$in);
    }
}
