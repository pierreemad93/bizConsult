@extends('layouts.admin')
@section('title', __('admin.service'))
@section('content')
    <div class="container-fluid">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
            <h2 class="h5 page-title">{{ __('admin.service') }}</h2>
            @if (permission('service-create'))
                <div class="page-title-right">
                    <x-action-buttons toRoute="{{ route('admin.services.create') }}" type="create" />
                </div>
            @endif

        </div>

        <div class="card shadow">
            <div class="card-body">
                <x-success-alert />

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{ __('admin.title') }}</th>
                            <th>{{ __('admin.icon') }}</th>
                            <th>{{ __('admin.action') }}</th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($services as $key=>$service)
                            <tr>
                                <td width="10%">{{ $services->firstItem() + $loop->index }}</td>
                                <td>{{ $service->title }}</td>
                                <td width="15%"><i class="{{ $service->icon }} fa-2x"></i></td>
                                <td width="20%">
                                    @if (permission('service-edit'))
                                        <x-action-buttons
                                            toRoute="{{ route('admin.services.edit', ['service' => $service]) }}"
                                            type="edit" />
                                    @endif
                                    @if (permission('service-view'))
                                        <x-action-buttons
                                            toRoute="{{ route('admin.services.show', ['service' => $service]) }}"
                                            type="show" />
                                    @endif
                                    @if (permission('service-delete'))
                                        <x-delete-button
                                            toRoute="{{ route('admin.services.destroy', ['service' => $service]) }}"
                                            id="{{ $service->id }}" />
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <x-no-record-found name="{{ __('admin.no_services_found') }}" />
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center">
                {{ $services->links() }}
            </div>
        </div>
    </div> <!-- .container-fluid -->

@endsection
