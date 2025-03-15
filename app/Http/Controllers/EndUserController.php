<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\StoreSubscriberRequest;
use App\Models\Message;
use App\Models\Subscriber;
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
    public function subscriberStore(StoreSubscriberRequest $request)
    {
        $data = $request->validated();
        Subscriber::create($data);
        return back()->with(['subscriber_success' => 'Your mail send successfully']);
    }
    public function sentMessage(StoreMessageRequest $request)
    {
        $data = $request->validated();
        Message::create($data);
        return back()->with(['success' => 'Your message sent successfully']);
    }
}
