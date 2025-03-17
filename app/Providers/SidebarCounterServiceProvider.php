<?php

namespace App\Providers;

use App\Models\Message;
use App\Models\Subscriber;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class SidebarCounterServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(Message $messages, Subscriber $subscribers): void
    {
        //
        $countMessages = $messages->count();
        $countSubscribers = $subscribers->count();
        View::share(['countMessages' => $countMessages, 'countSubscribers' => $countSubscribers]);
    }
}
