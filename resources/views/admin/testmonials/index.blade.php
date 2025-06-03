@extends('layouts.admin')
@section('title', __('admin.testmonials'))
@section('content')
    <div class="container-fluid">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
            <h2 class="h5 page-title">{{ __('admin.testmonials') }}</h2>
            <div class="page-title-right">
                @can('testmonial-create')
                    <x-action-buttons toRoute="{{ route('admin.testmonials.create') }}" type="create" />
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
                        @forelse ($testmonials as $key=>$testmonial)
                            <tr>
                                <td width="10%">{{ $testmonials->firstItem() + $loop->index }}</td>
                                <td>{{ $testmonial->name }}</td>
                                <td>{{ $testmonial->position }}</td>
                                <td width="15%">
                                    <img src="{{ asset("storage/testmonials/$testmonial->image") }}"  style="height:20vh"/>

                                </td>
                                <td width="20%">
                                    @can('testmonial-edit')
                                        <x-action-buttons
                                            toRoute="{{ route('admin.testmonials.edit', ['testmonial' => $testmonial]) }}"
                                            type="edit" />
                                    @endcan
                                    @can('testmonial-view')
                                        <x-action-buttons
                                            toRoute="{{ route('admin.testmonials.show', ['testmonial' => $testmonial]) }}"
                                            type="show" />
                                    @endcan
                                    @can('testmonial-delete')
                                        <x-delete-button
                                            toRoute="{{ route('admin.testmonials.destroy', ['testmonial' => $testmonial]) }}"
                                            id="{{ $testmonial->id }}" />
                                    @endcan
                                </td>
                            </tr>
                        @empty
                            <x-no-record-found name="{{ __('admin.no_testmonials_found') }}" />
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center">
                {{ $testmonials->links() }}
            </div>
        </div>
    </div> <!-- .container-fluid -->

@endsection
