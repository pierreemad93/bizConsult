<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Spatie\Permission\Models\Role;
use Illuminate\Contracts\View\View;
use Spatie\Permission\Models\Permission;

class RoleComponent extends Component
{
    public $roles ;
    public $permissions ;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
        $this->roles = Role::where('guard_name' , 'admin')->paginate(config('paginate.count'));
        $this->permissions = Permission::where('guard_name' , 'admin')->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.role-component');
    }
}
