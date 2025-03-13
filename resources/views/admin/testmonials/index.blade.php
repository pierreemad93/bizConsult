@extends('layouts.admin')
@section('title', __('admin.testmonial'))
@section('content')
    <div class="container-fluid">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
            <h2 class="h5 page-title">{{ __('admin.testmonials') }}</h2>
            <div class="page-title-right">
                <x-action-buttons toRoute="{{ route('admin.testmonials.create') }}" type="create" />
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
                                    <img src="{{ asset("storage/testmonials/$testmonial->image") }}"/>    
                        
                                </td>
                                <td width="20%">
                                    <x-action-buttons toRoute="{{ route('admin.testmonials.edit', ['testmonial' => $testmonial]) }}"
                                        type="edit" />
                                    <x-action-buttons toRoute="{{ route('admin.testmonials.show', ['testmonial' => $testmonial]) }}"
                                        type="show" />
                                    <x-delete-button
                                        toRoute="{{ route('admin.testmonials.destroy', ['testmonial' => $testmonial]) }}"
                                        id="{{ $testmonial->id }}" />
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
