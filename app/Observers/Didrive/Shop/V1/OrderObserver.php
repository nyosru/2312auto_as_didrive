<?php

namespace App\Observers\Didrive\Shop\V1;

use App\Models\Didrive\Log;
use App\Models\Didrive\Shop\v1\Order;

class OrderObserver
{
//    /**
//     * Handle the Order "created" event.
//     */
//    public function created(Order $order): void
//    {
//        //
//    }

    /**
     * Handle the Order "updated" event.
     */
    public function updated(Order $order): void
    {
        // если изменился статус заказа
        if( !empty($order->getChanges()['status']) ) {
            $or = new \App\Livewire\Didrive\Shop\V1\Order();
            Log::create([
                'model' => 'Order',
                'model_id' => $order->getOriginal()['id'],
                'type' => 'status',
                'msg' => 'установлен статус заказа <b>' . ($or->types_order[$order->getChanges()['status']] ?? '') . '</b> (' . $order->getChanges()['status'] . ') '
            ]);
        }
    }
//
//    /**
//     * Handle the Order "deleted" event.
//     */
//    public function deleted(Order $order): void
//    {
//        //
//    }
//
//    /**
//     * Handle the Order "restored" event.
//     */
//    public function restored(Order $order): void
//    {
//        //
//    }
//
//    /**
//     * Handle the Order "force deleted" event.
//     */
//    public function forceDeleted(Order $order): void
//    {
//        //
//    }
}
