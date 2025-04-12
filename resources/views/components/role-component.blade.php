<div class="my-4">
    {{-- <x-action-buttons toRoute="{{ route('admin.roles.create') }}" type="create" /> --}}

    <div class="card-body">
        <button type="button" class="btn mb-2 btn-primary" data-toggle="modal" data-target="#addRole" data-whatever="@mdo">
            {{ __('admin.add_new') }}
        </button>
        <x-success-alert />
        {{-- CreateRoleModal --}}
        <div class="modal fade" id="addRole" tabindex="-1" role="dialog" aria-labelledby="addRoleLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="varyModalLabel">{{ __('admin.add_new_role') }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.roles.store') }}" method="POST"">
                            @csrf
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">{{ __('admin.name') }}</label>
                                <input type="text" class="form-control" id="recipient-name" name="name">
                                <x-input-error :messages="$errors->get('name')" />
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    @foreach ($permissions as $permission)
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="permissionArray[{{ $permission->name }}]" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    {{ $permission->name }} </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn mb-2 btn-secondary"
                                    data-dismiss="modal">Close</button>
                                <button type="submit" class="btn mb-2 btn-primary">{{ __('admin.submit') }}</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        {{-- ./CreateRoleModal --}}
    </div>
</div>
<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>{{ __('admin.name') }}</th>
            <th>{{ __('admin.no_of_permissions') }}</th>
            <th>{{ __('admin.action') }}</th>

        </tr>
    </thead>
    <tbody>
        @forelse ($roles as $key=>$role)
            <tr>
                <td>{{ $roles->firstItem() + $loop->index }}</td>
                <td>{{ $role->name }}</td>
                <td>{{ $role->permissions->count() }}</td>
                <td>
                    <button type="button" class="btn btn-success" data-toggle="modal"
                        data-target="#editRole-{{ $role->id }}" data-whatever="@mdo">
                        <i class="fe fe-edit"></i>
                    </button>
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#showRole-{{ $role->id }}" data-whatever="@mdo">
                        <i class="fe fe-eye"></i>
                    </button>
                    <button type="button" class="btn btn-danger" data-toggle="modal"
                        data-target="#deleteRole-{{ $role->id }}" data-whatever="@mdo">
                        <i class="fe fe-trash"></i>
                    </button>

                </td>
            </tr>
            {{-- ShowRoleModal --}}
            <x-role.show id="showRole-{{ $role->id }}" :role="$role" :permissions="$role->permissions" />
            {{-- ./ShowRoleModal --}}

            {{-- EditRoleModal --}}
            <x-role.edit id="editRole-{{ $role->id }}" :role="$role" :permissions="$permissions" />
            {{-- ./EditRoleModal --}}

            {{-- DeleteRoleModal --}}
            <x-role.delete id="deleteRole-{{ $role->id }}" :role="$role" />
            {{-- ./DeleteRoleModal --}}
        @empty
            <x-no-record-found name="{{ __('admin.no_roles_found') }}" />
        @endforelse
    </tbody>
</table>
