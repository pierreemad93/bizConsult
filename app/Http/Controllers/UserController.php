<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Providers\RouteServiceProvider;
use App\Trait\UploadImage;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    use UploadImage;
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
        $imageName = $this->storeImage($request->file('image'), 'users');
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'image' => $imageName,
        ]);


        $user->assignRole($data['role']);
        return to_route('admin.users.index')->with('success', __('admin.added_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
        Gate::authorize('user-view');
        return view('admin.users.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
        // dd($user) ;
        Gate::authorize('user-edit');
        $roles = Role::where('guard_name', 'admin')->get();
        return view('admin.users.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, User $user)
    {
        //
        Gate::authorize('user-edit');
        
        $data = $request->validated();
        $imageName = $this->updateImage($request->file('image'), 'users');
        $user->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'image' => $imageName,
        ]);
        $user->assignRole($data['role']);
        return to_route('admin.users.index')->with('success', __('admin.updated_successfully'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
        Gate::authorize('user-delete');
        $user->delete();
        return to_route('admin.users.index')->with('success', __('admin.delete_successfully'));
    }
}
