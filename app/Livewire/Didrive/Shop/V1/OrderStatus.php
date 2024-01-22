<?php

namespace App\Livewire\Didrive\Shop\V1;

use Livewire\Component;

class OrderStatus extends Component
{

    public $order_id;

    public $types_order = [];

    public function __construct()
    {
        $or = new Order();
        $this->types_order = $or->types_order;
    }

    public function setStatus( \App\Models\Didrive\Shop\v1\Order $o, $new_status){
        $o->status = $new_status;
        $o->save();
        return redirect()->to('/show/'.$new_status)
//            ->with('status', 'Post created!')
            ;
//        return back();
    }

    public function render()
    {
        $in = [
            'now' => \App\Models\Shop\v1\Order::whereId($this->order_id)->get()
        ];
        return view('livewire.didrive.shop.v1.order-status',$in);
    }
}
