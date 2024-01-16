<?php

namespace App\Livewire\Ar\Show2;

use App\Models\Ar\ArPayed;
use Livewire\Component;

class ArShow2PayedItem extends Component
{
    public $item;


    public function delete( ArPayed $item )
    {

//        // если оплата 1 месяц
//        if ($this->month == 'yes') {
//            $this->date_end = date('Y-m-d', strtotime($this->date_start . ' +1 month -1 day'));
//        }

//        $this->validate();
//        $this->js("alert('Post saved!')");
//        $this->js("return( confirm('Post delete?') );");
        $item->delete();
        return $this->redirect( route('ar.show2') );
    }


    public function render()
    {
        return view('livewire.ar.show2.ar-show2-payed-item');
    }
}
