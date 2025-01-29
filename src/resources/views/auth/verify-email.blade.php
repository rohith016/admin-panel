
@extends('admin.layouts.app-auth')

@section('title', 'Admin Login')

@section('content')

<div class="card">
    <div class="card-body login-card-body">

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

      <form action="{{ route('verification.send') }}" method="post">
        @csrf
        <div class="input-group mb-4">
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-dark">{{ __('Reset Password') }}</button>
            </div>
        </div>
          <!-- /.col -->
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <div class="input-group mb-4">
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-danger">{{ __('Log Out') }}</button>
                </div>
            </div>
        </form>

    </div>
    <!--end::Row-->
</div>


@endsection


