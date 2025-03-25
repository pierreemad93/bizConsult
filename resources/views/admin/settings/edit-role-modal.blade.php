<div class="modal fade" id="editRole-{{ $role->id }}" tabindex="-1" role="dialog" aria-labelledby="addRoleLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="varyModalLabel">{{ __('admin.edit_role') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.roles.update', ['role' => $role]) }}" method="POST"">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">{{ __('admin.name') }}</label>
                        <input type="text" class="form-control" id="recipient-name" name="name"
                            value={{ $role->name }}>
                        <x-input-error :messages="$errors->get('name')" />
                    </div>
                    <div class="form-group">
                        <div class="row">
                            @foreach ($permissions as $permission)
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox"
                                            name="permissionArray[{{ $permission->name }}]" id="defaultCheck1"
                                            @checked($role->hasPermissionTo($permission))>
                                        <label class="form-check-label" for="defaultCheck1">
                                            {{ $permission->name }}
                                        </label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn mb-2 btn-primary">{{ __('admin.submit') }}</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
