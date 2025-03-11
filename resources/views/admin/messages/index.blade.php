@extends('layouts.admin')
@section('title', __('admin.message'))
@section('content')
    <div class="container-fluid">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
            <h2 class="h5 page-title">{{ __('admin.messages') }}</h2>
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
                            <th>{{ __('admin.subject') }}</th>
                            <th>{{ __('admin.action') }}</th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($messages as $key=>$message)
                            <tr>
                                <td width="10%">{{ $messages->firstItem() + $loop->index }}</td>
                                <td>{{ $message->name }}</td>
                                <td>{{$message->email}}</td>
                                <td>{{$message->subject}}</td>
                                <td>
                                    <x-action-buttons toRoute="{{ route('admin.messages.show', ['message' => $message]) }}"
                                        type="show" />
                                    <x-delete-button
                                        toRoute="{{ route('admin.messages.destroy', ['message' => $message]) }}"
                                        id="{{ $message->id }}" />
                                </td>
                            </tr>
                        @empty
                            <x-no-record-found name="{{ __('admin.no_messages_found') }}" />
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center">
                {{ $messages->links() }}
            </div>
        </div>
    </div> <!-- .container-fluid -->

@endsection
