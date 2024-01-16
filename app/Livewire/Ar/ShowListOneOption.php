<?php

namespace App\Livewire\Ar;

use App\Models\Ar\ArObject;
use App\Models\Ar\ArPrice;
use App\Models\Ar\Items;
use App\Models\Ar\Tenant;
use Livewire\Component;

#[Lazy]
class ShowListOneOption extends Component
{
    public static $in = [];

    public $item = [];
    public $show_id = '';
//    public static $now_group = '';

//    public static function getListMonth(){
//
//        $return = [];
//
//        for( $year = 2000; $year <= date('Y') ; $year++){
//            for( $m = 1; $m <= 12; $m ++ ){
//                $return[$year][$m] = 1;
//            }
//        }
//
//        return $return;
//
//    }
//    public static function getDataObjects()
//    {
////        return ArObject::with('group','prices','prices.tenant','payes')->orderBy('group_id')->get();
//        return ArObject::with('group')->orderBy('group_id')->get();
//
////        return Tenant::orderBy('name')->paginate(20);
////        return Tenant::addSelect(['id', 'name', 'address', 'group_id'])->with('group')->orderBy('name')->paginate(100);
////        return \App\Models\Ar\Group::addSelect(['name','address'])->all();
//    }
//
    public static function getDataPrices( int $id )
    {
        return ArPrice::where('ar_object_id','=',$id)->with('tenant')->get();
////        return \App\Models\Ar\Group::orderBy('name')->paginate(20);
////        return \App\Models\Ar\Group::orderBy('name')->paginate(20);
////        return Tenant::orderBy('name')->paginate(20);
////        return Tenant::addSelect(['id', 'name', 'address', 'group_id'])->with('group')->orderBy('name')->paginate(100);
////        return \App\Models\Ar\Group::addSelect(['name','address'])->all();
    }


    public function render()
    {
//        sleep(2);
        self::$in['da'] = $this->item;
////        self::$in['ss'] = $thi;
////        self::$in['objects'] = self::getDataObjects()->toArray();
//        self::$in['objects'] = self::getDataObjects();
        self::$in['prices'] = self::getDataPrices($this->item->id);
//        self::$in['listMonth'] = self::getListMonth();
        return view('livewire.ar.show-list-one-option',self::$in);
    }
}
