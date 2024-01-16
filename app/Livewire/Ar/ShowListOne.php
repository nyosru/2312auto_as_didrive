<?php

namespace App\Livewire\Ar;

use App\Models\Ar\ArObject;
use App\Models\Ar\Items;
use App\Models\Ar\Tenant;
use Livewire\Component;

class ShowListOne extends Component
{
    public static $in = [];
//    public static $now_group = '';

    public static function getListMonth(){

        $return = [];

        for( $year = 2000; $year <= date('Y') ; $year++){
            for( $m = 1; $m <= 12; $m ++ ){
                $return[$year][$m] = 1;
            }
        }

        return $return;

    }
    public static function getDataObjects()
    {
//        return ArObject::with('group','prices','prices.tenant','payes')->orderBy('group_id')->get();
        return ArObject::with('group')->orderBy('group_id')->get();

//        return Tenant::orderBy('name')->paginate(20);
//        return Tenant::addSelect(['id', 'name', 'address', 'group_id'])->with('group')->orderBy('name')->paginate(100);
//        return \App\Models\Ar\Group::addSelect(['name','address'])->all();
    }

    public static function getData()
    {
//        return Items::all();
//        return \App\Models\Ar\Group::orderBy('name')->paginate(20);
//        return \App\Models\Ar\Group::orderBy('name')->paginate(20);
//        return Tenant::orderBy('name')->paginate(20);
//        return Tenant::addSelect(['id', 'name', 'address', 'group_id'])->with('group')->orderBy('name')->paginate(100);
//        return \App\Models\Ar\Group::addSelect(['name','address'])->all();
    }


    public function render()
    {
//        self::$in['da'] = [12,22];
        self::$in['now_group'] = '';
//        self::$in['objects'] = self::getDataObjects()->toArray();
        self::$in['objects'] = self::getDataObjects();
//        self::$in['objects'] = self::getData();
//        self::$in['listMonth'] = self::getListMonth();

        return view('livewire.ar.show-list-one',self::$in);
    }
}
