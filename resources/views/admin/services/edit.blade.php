@extends('layouts.admin')
@section('title', __('admin.service'))
@section('content')
    <div class="container-fluid">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
            <h2 class="h5 page-title">{{ __('admin.edit_service') }}</h2>

        </div>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('admin.services.update', ['service' => $service]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('Put')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <x-input-label>{{ __('admin.title') }}</x-input-label>
                            <input type="text" class="form-control" name="title" value="{{ $service->title }}">
                            <x-input-error :messages="$errors->get('title')" />
                        </div>
                    </div> <!-- /.col -->
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <x-input-label>{{ __('admin.icon') }}</x-input-label>
                            <input type="text" class="form-control" name="icon" value="{{ $service->icon }}">
                            <x-input-error :messages="$errors->get('icon')" />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group mb-3">
                            <x-input-label>{{ __('admin.description') }}</x-input-label>
                            <textarea class="form-control" rows="4" name="description">{{ $service->description }}</textarea>
                            <x-input-error :messages="$errors->get('description')" />
                        </div>
                    </div>
                </div>
                <x-primary-button>{{ __('admin.submit') }}</x-primary-button>
            </form>
        </div>

    </div>
    </div> <!-- .container-fluid -->
@endsection
