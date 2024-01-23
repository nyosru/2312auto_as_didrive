<?php

namespace App\Observers\Didrive\Shop\V1;

use App\Models\Didrive\Log;
use App\Models\Didrive\Shop\v1\Comment;

class CommentObserver
{
    /**
     * Handle the Comment "created" event.
     */
    public function created(Comment $comment): void
    {
            Log::create([
                'model' => 'Comment',
                'model_id' => $comment['order_id'],
                'type' => 'create',
                'msg' => 'добавлен <b>комментарий</b>: ' . $comment['text']
            ]);
    }

    /**
     * Handle the Comment "updated" event.
     */
    public function updated(Comment $comment): void
    {
        //
    }

    /**
     * Handle the Comment "deleted" event.
     */
    public function deleted(Comment $comment): void
    {
        Log::create([
            'model' => 'Comment',
            'model_id' => $comment['order_id'],
            'type' => 'delete',
            'msg' => 'удалён <b>комментарий</b>: ' . $comment['text']
        ]);
    }

    /**
     * Handle the Comment "restored" event.
     */
    public function restored(Comment $comment): void
    {
        //
    }

    /**
     * Handle the Comment "force deleted" event.
     */
    public function forceDeleted(Comment $comment): void
    {
        //
    }
}
