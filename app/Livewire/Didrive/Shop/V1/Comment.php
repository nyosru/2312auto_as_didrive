<?php

namespace App\Livewire\Didrive\Shop\V1;

use Livewire\Component;

class Comment extends Component
{

    public $order_id;
    public $datas;

    public $text;
    public $show = false;

    public function changeShow()
    {
        $this->show = !$this->show;
    }

    public function save()
    {
        $e = new \App\Models\Didrive\Shop\v1\Comment([
            'order_id' => $this->order_id,
            'text' => $this->text
        ]);
        $e->save();
        $this->text = '';
        return back();
    }

    public function delete(\App\Models\Didrive\Shop\v1\Comment $com)
    {
        $com->delete();
        return back();
    }

    public function render()
    {
        $in = [
            'data' => \App\Models\Didrive\Shop\v1\Comment::whereOrderId($this->order_id)->orderBy('created_at', 'desc')->get()
        ];
        return view('livewire.didrive.shop.v1.comment', $in);
    }
}
