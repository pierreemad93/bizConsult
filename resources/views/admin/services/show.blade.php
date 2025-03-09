@extends('layouts.admin')
@section('title', __('admin.service'))
@section('content')
    <div class="container-fluid">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
            <h2 class="h5 page-title">{{ __('admin.show_service') }}</h2>

        </div>
    </div>

    <div class="card shadow">
        <div class="card-body">

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label>{{ __('admin.title') }}</label>
                        <p class="form-control">{{ $service->title }} </p>

                    </div>
                </div> <!-- /.col -->
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label>{{ __('admin.icon') }}</label>
                        <div class="mt-2">
                            <i class="{{ $service->icon }} fa-2x"></i>
                        </div>

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label>{{ __('admin.description') }}</label>
                        <p class="form-control">{{ $service->description }} </p>
                    </div>
                </div>
            </div>
            <a class="btn btn-dark" href="{{ route('admin.services.index') }}"> {{ __('admin.back') }}</a>
        </div>

    </div>
    </div> <!-- .container-fluid -->
@endsection
