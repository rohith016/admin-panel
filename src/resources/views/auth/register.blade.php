@extends('admin.layouts.app-auth')

@section('title', 'Admin Register')

@section('content')

<div class="card">
    <div class="card-body register-card-body">
      <p class="register-box-msg">{{ __('Register a new membership') }}</p>
      <form action="{{ route('register') }}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Name" name="name" id="name" value="{{ old('name') }}" />
          <div class="input-group-text"><span class="bi bi-person"></span></div>
          <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div class="input-group mb-3">
          <input type="email" id="email" name="email" value="{{ old('email') }}"  class="form-control" placeholder="Email" />
          <div class="input-group-text"><span class="bi bi-envelope"></span></div>
          <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password"  id="password"/>
          <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
          <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation"  id="password_confirmation"/>
            <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        <!--begin::Row-->
        <div class="row">
          <div class="col-8">
            {{-- <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
              <label class="form-check-label" for="flexCheckDefault">
                I agree to the <a href="#">terms</a>
              </label>
            </div> --}}
          </div>
          <!-- /.col -->
          <div class="col-12">
            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-dark">{{ __('Register') }}</button>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!--end::Row-->
      </form>
      @if (config('adminlte.login.social.fb') || config('adminlte.login.social.google'))
        <div class="social-auth-links text-center mb-3 d-grid gap-2">
            <p>- OR -</p>
            @if (config('adminlte.login.social.fb'))
                <a href="#" class="btn btn-primary">
                <i class="bi bi-facebook me-2"></i> {{ __('Sign in using Facebook') }}
                </a>
            @endif
            @if (config('adminlte.login.social.google'))
                <a href="#" class="btn btn-secondary">
                <i class="bi bi-google me-2"></i> {{ __('Sign in using Google') }}
                </a>
            @endif
        </div>
      @endif
      <!-- /.social-auth-links -->
      <p class="mb-0">
        <a href="{{ route('login') }}" class="text-center"> {{ __('I already have a membership') }}</a>
      </p>
    </div>
    <!-- /.register-card-body -->
  </div>

@endsection
