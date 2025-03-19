<?php

namespace App\Services;

use App\Models\Subscriber;

class SubscribersService
{
    protected $subscriber ;
    public function __construct(Subscriber $subscriber)
    {
        $this->subscriber = $subscriber;
    }
    public function count()
    {
       return $this->subscriber->count();
    }
}
