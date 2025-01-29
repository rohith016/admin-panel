
@extends('admin.layouts.app-auth')

@section('title', 'Admin Login')

@section('content')

<div class="card">
    <div class="card-body login-card-body">
        <div class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

      <form action="{{ route('password.confirm') }}" method="post">
        @csrf

        <div class="input-group mb-4">
          <input type="password"  id="password" class="form-control" name="password"  value="{{ old('password') }}" placeholder="Password" required />
          <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
          <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

          <div class="col-12">
            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-dark">{{ __('Confirm') }}</button>
            </div>
          </div>
          <!-- /.col -->
        </form>
    </div>
    <!--end::Row-->
</div>


@endsection




