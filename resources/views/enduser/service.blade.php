@extends('layouts.enduser')
@section('title', 'service')
@section('service-active', 'active')

@section('hero')
    <x-bread-crumb title="Services" subTitle="Services" />
@endsection


@section('content')
    <!-- Service Start -->
    <x-enduser.service-component />
    <!-- Service End -->

    <!-- Testimonial Start -->
    <x-enduser.testmonial-component />
    <!-- Testimonial End -->
@endsection
