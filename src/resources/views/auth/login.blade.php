@extends('admin.layouts.app-auth')

@section('title', 'Admin Login')

@section('content')

<div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">{{ __('Sign in to start your session') }}</p>
      <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="email"  id="email" class="form-control" name="email"  value="{{ old('email') }}" placeholder="Email" required />
          <div class="input-group-text"><span class="bi bi-envelope"></span></div>
          <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" id="password" class="form-control" placeholder="Password" required  />
          <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
          <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <!--begin::Row-->
        <div class="row">
          <div class="col-8">
            <div class="form-check">
              <input class="form-check-input" id="remember_me" name="remember" type="checkbox"/>
              <label class="form-check-label" for="flexCheckDefault">{{ __('Remember me') }}</label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-dark">{{ __('Log in') }}</button>
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
      @if (Route::has('password.request'))
        <p class="mb-1"><a href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a></p>
      @endif

      @if (config('adminlte.login.registration'))
            <p class="mb-0">
                <a href="{{ route('register') }}" class="text-center">{{ __('Register a new membership') }} </a>
            </p>
      @endif

    </div>
    <!-- /.login-card-body -->
  </div>

@endsection
