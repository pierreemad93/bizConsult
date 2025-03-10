<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ActionButtons extends Component
{
    public string $color;
    public string $text;
    /**
     * Create a new component instance.
     */
    public function __construct(public string $toRoute,  public string $type)
    {
        //
        if ($type == 'create') {
            $this->color = 'primary';
            $this->text = __('admin.add_new');
        } elseif ($type == 'edit') {
            $this->color = 'success';
            $this->text = '<i class="fe fe-edit"></i>';
        } elseif ($type == 'show') {
            $this->color = 'primary';
            $this->text = '<i class="fe fe-eye"></i>';
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.action-buttons');
    }
}
