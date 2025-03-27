<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Models\Permission;
use App\Http\Requests\StoreSettingRequest;
use App\Http\Requests\UpdateSettingRequest;
use App\Providers\RouteServiceProvider;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if (!Gate::any(['setting-anyView', 'setting-create', 'setting-edit', 'setting-view', 'setting-delete'])) {
            return redirect(RouteServiceProvider::HOME);
        }
        $setting = Setting::findOrFail(1);
        return view('admin.settings.index', get_defined_vars());
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSettingRequest $request, Setting $setting)
    {
        //
        Gate::authorize('setting-edit');
        $data = $request->validated();
        $setting->update($data);
        return to_route('admin.settings.index')->with('success', __('admin.update_successfully'));
    }
}
