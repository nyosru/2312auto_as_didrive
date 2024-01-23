<?php

namespace App\Livewire\Didrive\Shop\V1;

use App\Models\Didrive\Log;
use Livewire\Component;

class OrderLog extends Component
{

    public $order_id;
    public $show = false;

    public function changeShow(){
        $this->show=!$this->show;
    }

    public function render()
    {
        return view('livewire.didrive.shop.v1.order-log',[
            'data' => Log::whereModel_id($this->order_id)->whereModel('order')->get()
        ]);
    }
}
