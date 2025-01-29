
@extends('admin.layouts.app-auth')

@section('title', 'Admin Login')

@section('content')

<div class="card">
    <div class="card-body login-card-body">

      <form action="{{ route('password.store') }}" method="post">
        @csrf

        <input type="hidden" name="token" value="{{ $request->route('token') }}">


        <div class="input-group mb-4">
            <input type="email"  id="email" class="form-control" name="email"  value="{{ old('email') }}" placeholder="Password" required />
            <div class="input-group-text"><span class="bi bi-envelope"></span></div>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>


        <div class="input-group mb-4">
          <input type="password"  id="password" class="form-control" name="password"  value="{{ old('password') }}" placeholder="Password" required />
          <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
          <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="input-group mb-4">
            <input type="password"  id="password_confirmation" class="form-control" name="password_confirmation"  value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required />
            <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="col-12">
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-dark">{{ __('Reset Password') }}</button>
            </div>
        </div>
          <!-- /.col -->
        </form>
    </div>
    <!--end::Row-->
</div>


@endsection

