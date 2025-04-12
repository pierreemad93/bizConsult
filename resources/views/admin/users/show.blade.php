@extends('layouts.admin')
@section('title', __('admin.user'))
@section('content')
    <div class="container-fluid">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
            <h2 class="h5 page-title">{{ __('admin.show_user') }}</h2>

        </div>
    </div>
    <div class="card shadow">
        <div class="card-body">

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <label>{{ __('admin.name') }}</label>
                        <p class="form-control">{{ $user->name }} </p>

                    </div>
                </div> <!-- /.col -->
                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <label>{{ __('admin.email') }}</label>
                        <p class="form-control">{{ $user->email }} </p>

                    </div>
                </div> <!-- /.col -->
                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <label>{{ __('admin.role') }}</label>
                        <p class="form-control">{{ $user->getRoleNames()->first() }} </p>

                    </div>
                </div> <!-- /.col -->

                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label>{{ __('admin.image') }}</label>
                        <div>
                            <img src="{{ asset("storage/users/$user->image") }}" style="height:25vh" />
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3 d-flex">
                        @if ($user->facebook)
                            <a class="nav-link" target="_blank" href="{{ $user->facebook }}">
                                <i class="fe fe-facebook fe-16"></i>
                            </a>
                        @endif
                        @if ($user->twitter)
                            <a class="nav-link" target="_blank" href="{{ $user->twitter }}">
                                <i class="fe fe-twitter fe-16"></i>
                            </a>
                        @endif
                        @if ($user->linkedin)
                            <a class="nav-link" target="_blank" href="{{ $user->linkedin }}">
                                <i class="fe fe-linkedin fe-16"></i>
                            </a>
                        @endif

                    </div>
                </div>
            </div>
            <a class="btn btn-dark" href="{{ route('admin.users.index') }}"> {{ __('admin.back') }}</a>
        </div>

    </div>
    </div> <!-- .container-fluid -->
@endsection
