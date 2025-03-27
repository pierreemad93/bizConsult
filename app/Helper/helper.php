<?php

use Illuminate\Support\Facades\Auth;

function permission($permission): bool
{
    return Auth::guard('admin')->user()->hasAnyPermission($permission) ? true : false;
}
