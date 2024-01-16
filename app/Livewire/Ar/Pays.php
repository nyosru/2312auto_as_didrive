<?php

namespace App\Livewire\Ar;

use App\Models\Ar\ArPay;
use Livewire\Component;

class Pays extends Component
{


    public static function getData( int $onpage = 100 )
    {
//        return Items::all();
        return ArPay::
//            addSelect(['id', 'date', 'amount', 'ar_object.nomer', 'ar_object.id'])
//            ->
        with('object', 'object.group', 'tenant')
//            ->orderBy('name')
            ->
        orderByDesc('date')
            ->paginate( $onpage );
//        return \App\Models\Ar\Group::addSelect(['name','address'])->all();
    }

    public function render()
    {
        $in = [
            'items' => self::getData(5)
        ];
        return view('livewire.ar.pays', $in);
    }

}
