<?php

namespace App\Livewire\Didrive\Shop\V1;

use Livewire\Component;

class OrderStatus extends Component
{

    public $order_id;

    public $types_order = [
//        'all' => 'Все',
        'new' => 'Новые',
        'maked' => 'Сборка',
        'sended' => 'Отправлен',
        'finish' => 'Завершён',
        'canceled' => 'Отменён',
    ];

    public function setStatus( \App\Models\Didrive\Shop\v1\Order $o, $new_status){
        $o->status = $new_status;
        $o->save();
        return back();
    }

    public function render()
    {
        $in = [
            'now' => \App\Models\Shop\v1\Order::find($this->order_id)->get()
        ];
        return view('livewire.didrive.shop.v1.order-status',$in);
    }
}
