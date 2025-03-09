@extends('layouts.admin')
@section('title', __('admin.service'))
@section('content')
    <div class="container-fluid">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
            <h2 class="h5 page-title">{{ __('admin.add_new_service') }}</h2>

        </div>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label>{{ __('admin.title') }}</label>
                            <input type="text" class="form-control" name="title">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div> <!-- /.col -->
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label>{{ __('admin.icon') }}</label>
                            <input type="text" class="form-control" name="icon">
                            @error('icon')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group mb-3">
                            <label>{{ __('admin.description') }}</label>
                            <textarea class="form-control" rows="4" name="description"></textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary mt-3">{{ __('admin.submit') }}</button>
            </form>
        </div>

    </div>
    </div> <!-- .container-fluid -->
@endsection
