@extends('layouts.admin')
@section('title', __('admin.testmonial'))
@section('content')
    <div class="container-fluid">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
            <h2 class="h5 page-title">{{ __('admin.add_new_testmonial') }}</h2>

        </div>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('admin.testmonials.store') }}" method="POST" enctype="multipart/form-data">
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
                            <x-input-label>{{ __('admin.position') }}</x-input-label>
                            <input type="text" class="form-control" name="position">
                            <x-input-error :messages="$errors->get('position')" />

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
                            <x-input-label>{{ __('admin.description') }}</x-input-label>
                            <textarea class="form-control" rows="4" name="description"></textarea>
                            <x-input-error :messages="$errors->get('description')" />

                        </div>
                    </div>
                </div>
                <x-primary-button>{{ __('admin.submit') }}</x-primary-button>
            </form>
        </div>

    </div>
    </div> <!-- .container-fluid -->
@endsection
