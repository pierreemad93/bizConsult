<?php

namespace App\View\Components\enduser;

use App\Models\Testmonial;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TestmonialComponent extends Component
{
    public $testmonials;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
        $this->testmonials = Testmonial::get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.enduser.testmonial-component');
    }
}
