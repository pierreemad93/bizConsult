<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Providers\RouteServiceProvider;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if (!Gate::any(['service-anyView', 'service-create', 'service-edit', 'service-view', 'service-delete'])) {
            return redirect(RouteServiceProvider::HOME);
        }
        $services = Service::paginate(config('paginate.count'));
        return view('admin.services.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        Gate::authorize('service-create');
        return view("admin.services.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        //
        Gate::authorize('service-create');
        $data = $request->validated();
        Service::create($data);
        return to_route('admin.services.index')->with('success', __('admin.create_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
        Gate::authorize('service-view');
        return view('admin.services.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
        Gate::authorize('service-edit');
        return view('admin.services.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        //
        Gate::authorize('service-edit');
        $data = $request->validated();
        $service->update($data);
        return to_route('admin.services.index')->with('success', __('admin.update_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
        Gate::authorize('service-delete');
        $service->delete();
        return to_route('admin.services.index')->with('success', __('admin.delete_successfully'));
    }
}
