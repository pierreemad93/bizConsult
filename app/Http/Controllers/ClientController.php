<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Support\Facades\Gate;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if (!Gate::any(['client-anyView', 'client-create', 'client-edit', 'client-view', 'client-delete'])) {
            return redirect(RouteServiceProvider::HOME);
        }
        $clients = Client::paginate(config('paginate.count'));
        return view('admin.clients.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        Gate::authorize('client-create');
        return view('admin.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClientRequest $request)
    {
        //
        Gate::authorize('client-create');
        $data = $request->validated();
        //upload image
        $image = $request->image;
        $newImageName = time() . '-' . $image->getClientOriginalName();
        $image->storeAs('clients', $newImageName, 'public');
        $data['image'] = $newImageName;
        Client::create($data);
        return to_route('admin.clients.index')->with('success', __('admin.create_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
        Gate::authorize('client-view');
        return view('admin.clients.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        //
        Gate::authorize('client-edit');
        return view('admin.clients.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientRequest $request, Client $client)
    {
        //
        Gate::authorize('client-edit');
        $data = $request->validated();
        if ($request->hasFile('image')) {
            Storage::delete("public/member/$client->image");
            $image = $request->image;
            $newImageName = time() . '-' . $image->getClientOriginalName();
            $image->storeAs('clients', $newImageName, 'public');
            $data['image'] = $newImageName;
        }
        $client->update($data);
        return to_route('admin.clients.index')->with('success', __('admin.update_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        //
        Gate::authorize('client-delete');
        $client->delete();
        return to_route('admin.clients.index')->with('success', __('admin.delete_successfully'));
    }
}
