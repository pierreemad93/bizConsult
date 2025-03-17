@extends('layouts.admin')
@section('title', __('admin.client'))
@section('content')
    <div class="container-fluid">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
            <h2 class="h5 page-title">{{ __('admin.clients') }}</h2>
            <div class="page-title-right">
                <x-action-buttons toRoute="{{ route('admin.clients.create') }}" type="create" />
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
                            <th>{{ __('admin.image') }}</th>
                            <th>{{ __('admin.action') }}</th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($clients as $key=>$client)
                            <tr>
                                <td width="10%">{{ $clients->firstItem() + $loop->index }}</td>
                                <td >{{ $client->name }}</td>
                                <td >
                                    <img src="{{ asset("storage/clients/$client->image") }}" style="height:20vh"/>    
                        
                                </td>
                                <td width="20%">
                                    <x-action-buttons toRoute="{{ route('admin.clients.edit', ['client' => $client]) }}"
                                        type="edit" />
                                    <x-action-buttons toRoute="{{ route('admin.clients.show', ['client' => $client]) }}"
                                        type="show" />
                                    <x-delete-button
                                        toRoute="{{ route('admin.clients.destroy', ['client' => $client]) }}"
                                        id="{{ $client->id }}" />
                                </td>
                            </tr>
                        @empty
                            <x-no-record-found name="{{ __('admin.no_clients_found') }}" />
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center">
                {{ $clients->links() }}
            </div>
        </div>
    </div> <!-- .container-fluid -->

@endsection
