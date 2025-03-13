@extends('layouts.admin')
@section('title', __('admin.testmonial'))
@section('content')
    <div class="container-fluid">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
            <h2 class="h5 page-title">{{ __('admin.show_testmonial') }}</h2>

        </div>
    </div>

    <div class="card shadow">
        <div class="card-body">

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label>{{ __('admin.name') }}</label>
                        <p class="form-control">{{ $testmonial->name }} </p>

                    </div>
                </div> <!-- /.col -->
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label>{{ __('admin.position') }}</label>
                        <div class="mt-2">
                            <p class="form-control">{{ $testmonial->position }}</p>
                        </div>

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label>{{ __('admin.image') }}</label>
                        <div>
                            <img src="{{ asset("storage/testmonials/$testmonial->image") }}" />
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label>{{ __('admin.description') }}</label>
                        <p class="form-control">{{ $testmonial->description }} </p>
                    </div>
                </div>
            </div>
            <a class="btn btn-dark" href="{{ route('admin.testmonials.index') }}"> {{ __('admin.back') }}</a>
        </div>

    </div>
    </div> <!-- .container-fluid -->
@endsection
