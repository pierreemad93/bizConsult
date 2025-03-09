@extends('layouts.admin')
@section('title', __('admin.service'))
@section('content')
    <div class="container-fluid">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
            <h2 class="h5 page-title">{{ __('admin.service') }}</h2>
            <div class="page-title-right">
                <a href="{{ route('admin.services.create') }}" class="btn btn-primary">
                    {{ __('admin.add_new') }}
                </a>
            </div>
        </div>

        <div class="card shadow">
            <div class="card-body">
                @session('success')
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endsession

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
                                    <a href="{{ route('admin.services.edit', ['service' => $service]) }}"
                                        class="btn btn-success">
                                        <i class="fe fe-edit"></i>
                                    </a>
                                    <a href="{{ route('admin.services.show', ['service' => $service]) }}"
                                        class="btn btn-primary">
                                        <i class="fe fe-eye"></i>
                                    </a>
                                    <form action="{{ route('admin.services.destroy', ['service' => $service]) }}"
                                        method="POST" class="d-inline" id="deleteForm-{{ $service->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" onclick="confirmDelete({{ $service->id }})">
                                            <i class="fe fe-trash"></i>
                                        </button>
                                    </form>

                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted">
                                    {{ __('admin.no_services_found') }}
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center">
                {{ $services->links() }}
            </div>
        </div>
    </div> <!-- .container-fluid -->
    <script>
        function confirmDelete(id) {
            if (confirm('Are you delete this recored ? ')) {
                document.querySelector(`#deleteForm-id`).submit();

            }
        }
    </script>
@endsection
