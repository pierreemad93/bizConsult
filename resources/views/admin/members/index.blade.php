@extends('layouts.admin')
@section('title', __('admin.member'))
@section('content')
    <div class="container-fluid">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
            <h2 class="h5 page-title">{{ __('admin.members') }}</h2>
            <div class="page-title-right">
                @can('member-create')
                    <x-action-buttons toRoute="{{ route('admin.members.create') }}" type="create" />
                @endcan
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
                            <th>{{ __('admin.position') }}</th>
                            <th>{{ __('admin.image') }}</th>
                            <th>{{ __('admin.action') }}</th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($members as $key=>$member)
                            <tr>
                                <td width="10%">{{ $members->firstItem() + $loop->index }}</td>
                                <td>{{ $member->name }}</td>
                                <td>{{ $member->position }}</td>
                                <td width="15%">
                                    <img src="{{ asset("storage/members/$member->image") }}" style="height:20vh" />

                                </td>
                                <td width="20%">
                                    @can('member-edit')
                                        <x-action-buttons toRoute="{{ route('admin.members.edit', ['member' => $member]) }}"
                                            type="edit" />
                                    @endcan
                                    @can('member-view')
                                        <x-action-buttons toRoute="{{ route('admin.members.show', ['member' => $member]) }}"
                                            type="show" />
                                    @endcan
                                    @can('member-delete')
                                        <x-delete-button toRoute="{{ route('admin.members.destroy', ['member' => $member]) }}"
                                            id="{{ $member->id }}" />
                                    @endcan

                                </td>
                            </tr>
                        @empty
                            <x-no-record-found name="{{ __('admin.no_members_found') }}" />
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center">
                {{ $members->links() }}
            </div>
        </div>
    </div> <!-- .container-fluid -->

@endsection
