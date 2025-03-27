<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Illuminate\Support\Facades\Gate;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\StoreFeatureRequest;
use App\Http\Requests\UpdateFeatureRequest;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if (!Gate::any(['feature-anyView', 'feature-create', 'feature-edit', 'feature-view', 'feature-delete'])) {
            return redirect(RouteServiceProvider::HOME);
        }
        $features = Feature::paginate(config('paginate.count'));
        return view('admin.features.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        Gate::authorize('feature-create');
        return view("admin.features.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFeatureRequest $request)
    {
        //
        Gate::authorize('feature-create');
        $data = $request->validated();
        Feature::create($data);
        return to_route('admin.features.index')->with('success', __('admin.create_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Feature $feature)
    {
        //
        Gate::authorize('feature-view');
        return view('admin.features.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feature $feature)
    {
        //
        Gate::authorize('feature-edit');
        return view('admin.features.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFeatureRequest $request, Feature $feature)
    {
        //
        Gate::authorize('feature-edit');
        $data = $request->validated();
        $feature->update($data);
        return to_route('admin.features.index')->with('success', __('admin.update_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feature $feature)
    {
        //
        Gate::authorize('feature-delete');
        $feature->delete();
        return to_route('admin.features.index')->with('success', __('admin.delete_successfully'));
    }
}
