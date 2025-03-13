<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EndUserController extends Controller
{
    //
    public function index()
    {
        return view('enduser.index', get_defined_vars());
    }
    public function about()
    {
        return view('enduser.about', get_defined_vars());
    }
    public function service()
    {
        return view('enduser.service', get_defined_vars());
    }
    public function contact()
    {
        return view('enduser.contact', get_defined_vars());
    }
}
