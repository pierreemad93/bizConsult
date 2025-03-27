@extends('layouts.admin')
@section('title', __('admin.setting'))
@section('content')
    <div class="container-fluid">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
            <h2 class="h5 page-title">{{ __('admin.settings') }}</h2>

        </div>
    </div>
    <div class="card shadow">
        <div class="card-body">
            <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                        aria-controls="pills-home" aria-selected="true">{{ __('admin.general') }}</a>
                </li>
                @canany(['role-anyView', 'role-create', 'role-edit', 'role-view', 'role-delete'])
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                            aria-controls="pills-profile" aria-selected="false">{{ __('admin.role') }}</a>
                    </li>
                @endcanany
            </ul>
            <div class="tab-content mb-1" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    @include('admin.settings.general')
                </div>
                @canany(['role-anyView', 'role-create', 'role-edit', 'role-view', 'role-delete'])
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <x-role-component />
                    </div>
                @endcanany

            </div>
        </div>
    </div> <!-- .container-fluid -->
@endsection
