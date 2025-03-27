<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Support\Facades\Gate;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\UpdateMessageRequest;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if (!Gate::any(['message-anyView', 'message-create', 'message-edit', 'message-view', 'message-delete'])) {
            return redirect(RouteServiceProvider::HOME);
        }
        $messages = Message::paginate(config('paginate.count'));
        return view('admin.messages.index', get_defined_vars());
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        //
        Gate::authorize('message-view');
        return view('admin.messages.show', get_defined_vars());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        //
        Gate::authorize('message-delete');
        $message->delete();
        return to_route('admin.messages.index')->with('success', __('admin.delete_successfully'));
    }
}
