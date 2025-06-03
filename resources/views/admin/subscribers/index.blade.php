@extends('layouts.admin')
@section('title', __('admin.subscribers'))
@section('content')
    <div class="container-fluid">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
            <h2 class="h5 page-title">{{ __('admin.subscribers') }}</h2>
        </div>

        <div class="card shadow">
            <div class="card-body">
                <x-success-alert />

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{ __('admin.email') }}</th>
                            <th>{{ __('admin.action') }}</th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($subscribers as $key=>$subscriber)
                            <tr>
                                <td width="10%">{{ $subscribers->firstItem() + $loop->index }}</td>

                                <td>{{ $subscriber->email }}</td>

                                <td>
                                    @can('subscriber-delete')
                                        <x-delete-button
                                            toRoute="{{ route('admin.subscribers.destroy', ['subscriber' => $subscriber]) }}"
                                            id="{{ $subscriber->id }}" />
                                    @endcan

                                </td>
                            </tr>
                        @empty
                            <x-no-record-found name="{{ __('admin.no_subscribers_found') }}" />
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center">
                {{ $subscribers->links() }}
            </div>
        </div>
    </div> <!-- .container-fluid -->

@endsection
