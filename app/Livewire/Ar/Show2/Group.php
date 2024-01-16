<?php

namespace App\Livewire\Ar\Show2;

use App\Models\Ar\Group as ArGroup;
use Livewire\Component;

class Group extends Component
{

    public static $in = [];

    public static function getData()
    {
        return ArGroup::addSelect(['id', 'name', 'address'])->orderBy('name')->get();
//        return \App\Models\Ar\Group::addSelect(['name','address'])->all();
    }

    public function render()
    {
        self::$in['groups'] = self::getData();
        return view('livewire.ar.show2.group',self::$in);
    }
}
