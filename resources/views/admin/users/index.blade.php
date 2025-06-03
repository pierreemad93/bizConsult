@extends('layouts.admin')
@section('title', __('admin.users'))
@section('content')
    <div class="container-fluid">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
            <h2 class="h5 page-title">{{ __('admin.users') }}</h2>
            <div class="page-title-right">
                <x-action-buttons toRoute="{{ route('admin.users.create') }}" type="create" />
            </div>
        </div>

        <div class="card shadow">
            <div class="card-body">
                <x-success-alert />

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{ __('admin.name') }}</th>
                            <th>{{ __('admin.email') }}</th>
                            <th>{{ __('admin.role') }}</th>
                            <th>{{ __('admin.image') }}</th>
                            <th>{{ __('admin.action') }}</th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $key=>$user)
                            <tr>
                                <td width="10%">{{ $users->firstItem() + $loop->index }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->getRoleNames()->first() }}</td>
                                <td width="15%">
                                    <img src="{{ asset("storage/users/$user->image") }}" style="height:20vh" />
                                </td>
                                <td width="20%">
                                    <x-action-buttons toRoute="{{ route('admin.users.edit', ['user' => $user]) }}"
                                        type="edit" />
                                    <x-action-buttons toRoute="{{ route('admin.users.show', ['user' => $user]) }}"
                                        type="show" />
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#deleteUser-{{ $user->id }}" data-whatever="@mdo">
                                        <i class="fe fe-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            {{-- Delete user Modal --}}
                            <div class="modal fade" id="deleteUser-{{ $user->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="addRoleLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="varyModalLabel">{{ __('admin.delete_user') }}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <h4 class="text-center">Are you sure to delete {{ $user->name }} ?</h4>
                                            <form action="{{ route('admin.users.destroy', ['user' => $user]) }}"
                                                method="POST"">
                                                @csrf
                                                @method('Delete')
                                                <div class="modal-footer">
                                                    <button type="button" class="btn mb-2 btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit"
                                                        class="btn mb-2 btn-danger">{{ __('admin.confirm') }}</button>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        @empty
                            <x-no-record-found name="{{ __('admin.no_users_found') }}" />
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center">
                {{ $users->links() }}
            </div>
        </div>
    </div> <!-- .container-fluid -->

@endsection
