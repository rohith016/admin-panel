
@extends('admin.layouts.app-auth')

@section('title', 'Admin Login')

@section('content')

<div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </p>
      <form action="{{ route('password.email') }}" method="post">
        @csrf
        <div class="input-group mb-4">
          <input type="email"  id="email" class="form-control" name="email"  value="{{ old('email') }}" placeholder="Email" required />
          <div class="input-group-text"><span class="bi bi-envelope"></span></div>
          <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

          <div class="col-12">
            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-dark">{{ __('Email Password Reset Link') }}</button>
            </div>
          </div>
          <!-- /.col -->
        </form>
    </div>
    <!--end::Row-->
</div>

@endsection


