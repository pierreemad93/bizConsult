@extends('layouts.admin')
@section('title', __('admin.user'))
@section('content')
    <div class="container-fluid">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
            <h2 class="h5 page-title">{{ __('admin.add_new_user') }}</h2>

        </div>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <x-input-label>{{ __('admin.name') }}</x-input-label>
                            <input type="text" class="form-control" name="name">
                            <x-input-error :messages="$errors->get('name')" />
                        </div>
                    </div> <!-- /.col -->
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <x-input-label>{{ __('admin.email') }}</x-input-label>
                            <input type="text" class="form-control" name="email">
                            <x-input-error :messages="$errors->get('email')" />

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <x-input-label>{{ __('admin.password') }}</x-input-label>
                            <input type="password" class="form-control" name="password">
                            <x-input-error :messages="$errors->get('password')" />
                        </div>
                    </div> <!-- /.col -->
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <x-input-label>{{ __('admin.password_confirmation') }}</x-input-label>
                            <input type="password" class="form-control" name="password_confirmation">

                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group mb-3">
                            <x-input-label>{{ __('admin.image') }}</x-input-label>
                            <input type="file" class="form-control-file" name="image">
                            <x-input-error :messages="$errors->get('image')" />

                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group mb-3">
                            <x-input-label>{{ __('admin.role') }}</x-input-label>
                            <select class="form-control" name="role">
                                <option value="" readonly>{{ __('admin.select_role') }}</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->name }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('role')" />
                        </div>
                    </div> <!-- /.col -->
                </div>
                <x-primary-button>{{ __('admin.submit') }}</x-primary-button>
            </form>
        </div>

    </div>
    </div> <!-- .container-fluid -->
@endsection
