<?php

namespace App\Livewire\Didrive\Shop\V1;

use App\Models\Shop\v1\Order as ShopOrder;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Order extends Component
{

    public $type_order = 'all';
// типы статусов
    public $types_order = [
//        'all' => 'Все',
        'new' => 'Новые',
        'maked' => 'Сборка',
        'sended' => 'Отправлен',
        'finish' => 'Завершён',
        'canceled' => 'Отменён',
    ];

    public function setFilterTypeOrder($new)
    {
        $this->type_order = $new;
    }

    public function setTypeOrder(ShopOrder $order, $new_status)
    {
        $order->status = $new_status;
        $order->save();
    }

    public function countShow($counts, $status)
    {
        foreach ($counts as $c) {
            if ($c['status'] == $status)
                return $c['count'];
        }
        return;
    }

    public function render()
    {
        $out = [
            'items' => ShopOrder::where(function ($query) {
                if (isset($this->types_order[$this->type_order]))
                    $query->where('status', '=', $this->type_order);
            })
                ->with('user', 'user.phone', 'orderGoods', 'orderGoods.good')
                ->orderBy('id', 'desc')
//                ->get()
                ->paginate(10)
        ];

        $out['items_count0'] = ShopOrder::where(function ($query) {
            if (isset($this->types_order[$this->type_order]))
                $query->where('status', '=', $this->type_order);
        })
//                ->with('user', 'user.phone', 'orderGoods', 'orderGoods.good')
//                ->orderBy('id', 'desc')
//                ->get()
//                ->paginate(10)
            ->groupBy('status')
            ->addSelect('status', db::raw('count(id) as `count`'))
            ->get();

        foreach ($out['items_count0'] as $c) {
            $out['items_count'][$c->status] = $c->count;
        }


        return view('livewire.didrive.shop.v1.order', $out);
    }
}
