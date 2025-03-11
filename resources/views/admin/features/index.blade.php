@extends('layouts.admin')
@section('title', __('admin.feature'))
@section('content')
    <div class="container-fluid">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
            <h2 class="h5 page-title">{{ __('admin.features') }}</h2>
            <div class="page-title-right">
                <x-action-buttons toRoute="{{ route('admin.features.create') }}" type="create" />
            </div>
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
                        @forelse ($features as $key=>$feature)
                            <tr>
                                <td width="10%">{{ $features->firstItem() + $loop->index }}</td>
                                <td>{{ $feature->title }}</td>
                                <td width="15%"><i class="{{ $feature->icon }} fa-2x"></i></td>
                                <td width="20%">
                                    <x-action-buttons toRoute="{{ route('admin.features.edit', ['feature' => $feature]) }}"
                                        type="edit" />
                                    <x-action-buttons toRoute="{{ route('admin.features.show', ['feature' => $feature]) }}"
                                        type="show" />
                                    <x-delete-button
                                        toRoute="{{ route('admin.features.destroy', ['feature' => $feature]) }}"
                                        id="{{ $feature->id }}" />
                                </td>
                            </tr>
                        @empty
                            <x-no-record-found name="{{ __('admin.no_features_found') }}" />
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center">
                {{ $features->links() }}
            </div>
        </div>
    </div> <!-- .container-fluid -->

@endsection
