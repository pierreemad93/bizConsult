@props(['id', 'role', 'permissions'])
<div class="modal fade" id="{{ $id }}" tabindex="-1" role="dialog" aria-labelledby="showRoleLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="varyModalLabel">{{ __('admin.show_role') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">{{ __('admin.name') }}</label>
                    <input type="text" class="form-control" id="recipient-name" value="{{ $role->name }}" disabled>
                </div>
                <div class="form-group">
                    <div class="row">
                        @foreach ($permissions as $permission)
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="defaultCheck1"
                                        @checked($role->hasPermissionTo($permission)) disabled>
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
                </div>
            </div>

        </div>
    </div>
</div>
