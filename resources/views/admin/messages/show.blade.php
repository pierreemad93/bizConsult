@extends('layouts.admin')
@section('title', __('admin.message'))
@section('content')
    <div class="container-fluid">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
            <h2 class="h5 page-title">{{ __('admin.show_message') }}</h2>

        </div>
    </div>

    <div class="card shadow">
        <div class="card-body">

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label>{{ __('admin.name') }}</label>
                        <p class="form-control">{{ $message->name }} </p>

                    </div>
                </div> <!-- /.col -->
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label>{{ __('admin.email') }}</label>
                        <p class="form-control">{{ $message->email }} </p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label>{{ __('admin.subject') }}</label>
                        <p class="form-control">{{ $message->subject }} </p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label>{{ __('admin.message') }}</label>
                        <p class="form-control">{{ $message->message }} </p>
                    </div>
                </div>
            </div>
            <a class="btn btn-dark" href="{{ route('admin.messages.index') }}"> {{ __('admin.back') }}</a>
        </div>

    </div>
    </div> <!-- .container-fluid -->
@endsection
