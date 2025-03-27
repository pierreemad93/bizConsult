@extends('layouts.admin')
@section('title', __('admin.member'))
@section('content')
    <div class="container-fluid">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
            <h2 class="h5 page-title">{{ __('admin.show_member') }}</h2>

        </div>
    </div>
    <div class="card shadow">
        <div class="card-body">

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label>{{ __('admin.name') }}</label>
                        <p class="form-control">{{ $member->name }} </p>

                    </div>
                </div> <!-- /.col -->
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label>{{ __('admin.position') }}</label>
                        <div class="mt-2">
                            <p class="form-control">{{ $member->position }}</p>
                        </div>

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label>{{ __('admin.image') }}</label>
                        <div>
                            <img src="{{ asset("storage/members/$member->image") }}" style="height:25vh" />
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3 d-flex">
                        @if ($member->facebook)
                            <a class="nav-link" target="_blank" href="{{ $member->facebook }}">
                                <i class="fe fe-facebook fe-16"></i>
                            </a>
                        @endif
                        @if ($member->twitter)
                            <a class="nav-link" target="_blank" href="{{ $member->twitter }}">
                                <i class="fe fe-twitter fe-16"></i>
                            </a>
                        @endif
                        @if ($member->linkedin)
                            <a class="nav-link" target="_blank" href="{{ $member->linkedin }}">
                                <i class="fe fe-linkedin fe-16"></i>
                            </a>
                        @endif

                    </div>
                </div>
            </div>
            <a class="btn btn-dark" href="{{ route('admin.members.index') }}"> {{ __('admin.back') }}</a>
        </div>

    </div>
    </div> <!-- .container-fluid -->
@endsection
