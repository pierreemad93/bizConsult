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
            <x-success-alert />
            <form action="{{ route('admin.settings.update', ['setting' => $setting]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('Put')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <x-input-label>{{ __('admin.address') }}</x-input-label>
                            <input type="text" class="form-control" name="address" value="{{ $setting->address }}">
                            <x-input-error :messages="$errors->get('address')" />
                        </div>
                    </div> <!-- /.col -->
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <x-input-label>{{ __('admin.email') }}</x-input-label>
                            <input type="text" class="form-control" name="email" value="{{ $setting->email }}">
                            <x-input-error :messages="$errors->get('email')" />
                        </div>
                    </div> <!-- /.col -->
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <x-input-label>{{ __('admin.phone') }}</x-input-label>
                            <input type="text" class="form-control" name="phone" value="{{ $setting->phone }}">
                            <x-input-error :messages="$errors->get('phone')" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <x-input-label>{{ __('admin.facebook') }}</x-input-label>
                            <input type="url" class="form-control" name="facebook" value="{{ $setting->facebook }}">
                            <x-input-error :messages="$errors->get('facebook')" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <x-input-label>{{ __('admin.twitter') }}</x-input-label>
                            <input type="url" class="form-control" name="twitter" value="{{ $setting->twitter }}">
                            <x-input-error :messages="$errors->get('twitter')" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <x-input-label>{{ __('admin.linkedin') }}</x-input-label>
                            <input type="url" class="form-control" name="linkedin" value="{{ $setting->linkedin }}">
                            <x-input-error :messages="$errors->get('linkedin')" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <x-input-label>{{ __('admin.youtube') }}</x-input-label>
                            <input type="url" class="form-control" name="youtube" value="{{ $setting->youtube }}">
                            <x-input-error :messages="$errors->get('youtube')" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <x-input-label>{{ __('admin.instagram') }}</x-input-label>
                            <input type="url" class="form-control" name="instagram" value="{{ $setting->instagram }}">
                            <x-input-error :messages="$errors->get('instagram')" />
                        </div>
                    </div>
                    
                </div>
                <x-primary-button>{{ __('admin.submit') }}</x-primary-button>
            </form>
        </div>

    </div>
    </div> <!-- .container-fluid -->
@endsection
