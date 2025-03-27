<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Providers\RouteServiceProvider;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        if (!Gate::any(['user-anyView', 'user-create', 'user-edit', 'user-view', 'user-delete'])) {
            return redirect(RouteServiceProvider::HOME);
        }
        $users = User::paginate(config('paginate.count'));
        return view('admin.users.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        Gate::authorize('user-create');
        $roles = Role::where('guard_name', 'admin')->get();
        return view('admin.users.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        //
        Gate::authorize('user-create');
        $data = $request->validated();
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $user->assignRole($data['role']);
        return to_route('admin.users.index')->with('success', __('admin.added_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        Gate::authorize('user-view');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        Gate::authorize('user-edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        Gate::authorize('user-edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Gate::authorize('user-delete');
    }
}
