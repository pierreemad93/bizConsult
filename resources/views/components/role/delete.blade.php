@props(['id', 'role'])
<div class="modal fade" id="{{ $id }}" tabindex="-1" role="dialog" aria-labelledby="addRoleLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="varyModalLabel">{{ __('admin.delete_role') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h4 class="text-center">Are you sure to delete {{ $role->name }} Role ?</h4>
                <form action="{{ route('admin.roles.destroy', ['role' => $role]) }}" method="POST"">
                    @csrf
                    @method('Delete')
                    <div class="modal-footer">
                        <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn mb-2 btn-danger">{{ __('admin.confirm') }}</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
