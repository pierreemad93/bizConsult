<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Support\Facades\Gate;
use App\Providers\RouteServiceProvider;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if (!Gate::any(['subscriber-anyView', 'subscriber-delete'])) {
            return redirect(RouteServiceProvider::HOME);
        }
        $subscribers = Subscriber::paginate(config('paginate.count'));
        return view('admin.subscribers.index', get_defined_vars());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscriber $subscriber)
    {
        //
        Gate::authorize('subscriber-delete');
        $subscriber->delete();
        return to_route('admin.subscribers.index')->with('success', __('admin.delete_successfully'));
    }
}
