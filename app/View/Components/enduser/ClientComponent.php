<?php

namespace App\View\Components\enduser;

use Closure;
use App\Models\Client;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class ClientComponent extends Component
{
    public $clients;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //

        $this->clients = Client::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.enduser.client-component');
    }
}
