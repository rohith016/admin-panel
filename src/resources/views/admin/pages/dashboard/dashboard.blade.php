@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')

@include('admin.partials.breadcrumbs', ['title' => 'Dashboard', 'path' => ["Dashboard"]])

<div class="app-content">
    <div class="container-fluid">

        @include('admin.pages.dashboard.cards')


        <p>Welcome, Hey User</p>
    </div>
</div>


@endsection
