@extends('layouts.admin')
@section('title', __('admin.client'))
@section('content')
    <div class="container-fluid">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
            <h2 class="h5 page-title">{{ __('admin.show_client') }}</h2>

        </div>
    </div>
    <div class="card shadow">
        <div class="card-body">

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label>{{ __('admin.name') }}</label>
                        <p class="form-control">{{ $client->name }} </p>

                    </div>
                </div> <!-- /.col -->
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label>{{ __('admin.image') }}</label>
                        <div>
                            <img src="{{ asset("storage/clients/$client->image") }}" style="height:25vh" />
                        </div>
                    </div>
                </div>
            </div>
            <a class="btn btn-dark" href="{{ route('admin.clients.index') }}"> {{ __('admin.back') }}</a>
        </div>

    </div>
    </div> <!-- .container-fluid -->
@endsection
