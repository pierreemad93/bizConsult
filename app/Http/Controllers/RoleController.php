<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\RoleRequest;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;

class RoleController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoleRequest $request)
    {
        //
        Gate::authorize('role-create');
        $data = $request->validated();
        $permissions = $data['permissionArray'];
        $role = Role::create([
            'name' => $data['name'],
            'guard_name' => 'admin',
        ]);
        foreach ($permissions as $permission => $value) {
            $role->givePermissionTo($permission);
        }
        return to_route('admin.settings.index')->with('success', __('admin.create_successfully'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(RoleRequest $request, Role $role)
    {
        //
        Gate::authorize('role-edit');
        $data = $request->validated();
        $role->update(['name' => $data['name']]);
        $role->syncPermissions();
        if (isset($data['permissionArray'])) {
            foreach ($data['permissionArray'] as $permission => $value) {
                $role->givePermissionTo($permission);
            }
        }
        return to_route('admin.settings.index')->with('success', __('admin.update_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        //
        Gate::authorize('role-delete');
        $permissions = $role->permissions()->get();
        foreach ($permissions as $permission) {
            $role->revokePermissionTo($permission);
        }
        $role->delete();
        return to_route('admin.settings.index')->with('success', __('admin.delete_successfully'));
    }
}
