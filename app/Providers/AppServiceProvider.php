<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Didrive\Shop\v1\Order;
use App\Observers\Didrive\Shop\V1\OrderObserver;
use App\Models\Didrive\Shop\v1\Comment;
use App\Observers\Didrive\Shop\V1\CommentObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Order::observe(OrderObserver::class);
        Comment::observe(CommentObserver::class);
    }
}
