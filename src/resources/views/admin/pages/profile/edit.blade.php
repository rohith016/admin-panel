@extends('admin.layouts.app')

@section('title', 'Profile')

@section('content')

@include('admin.partials.breadcrumbs', ['title' => 'Profile', 'path' => ["Profile"]])

<div class="app-content">
    <div class="container-fluid">

        <div class="col-md-12">
            <div class="card card-primary card-outline mb-4">
                @include('admin.pages.profile.update-profile-information-form')
            </div>
        </div>

        <div class="col-md-12">
            <div class="card card-primary card-outline mb-4">
                @include('admin.pages.profile.update-password-form')
            </div>
        </div>


        <div class="col-md-12">
            <div class="card card-danger card-outline mb-4">
                @include('admin.pages.profile.delete-user-form')
            </div>
        </div>

    </div>
</div>


@endsection
