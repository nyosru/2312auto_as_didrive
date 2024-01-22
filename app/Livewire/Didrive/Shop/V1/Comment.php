<?php

namespace App\Livewire\Didrive\Shop\V1;

use Livewire\Component;

class Comment extends Component
{

    public $order_id;
    public $datas;

    public $text;

    public function save(){
        $e = new \App\Models\Didrive\Shop\v1\Comment([
            'order_id' => $this->order_id,
            'text' => $this->text
        ]);
        $e->save();
//        dd(\App\Models\Didrive\Shop\v1\Comment::all());
        return back();
    }
    public function delete( \App\Models\Didrive\Shop\v1\Comment $com )
    {
        $com->delete();
        return back();
    }
    public function render()
    {

        $in = [];
        $in['data'] = \App\Models\Didrive\Shop\v1\Comment::whereOrderId($this->order_id)->orderBy('created_at','desc')->get();
//        dd($in['data']);


        return view('livewire.didrive.shop.v1.comment',$in);
    }
}
