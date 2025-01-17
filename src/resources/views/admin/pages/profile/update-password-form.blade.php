<div>
    <div class="card-header"><div class="card-title"> {{ __('Update Password') }}</div></div>
    <form method="post" action="{{ route('password.update') }}" class="">
        @csrf
        @method('put')
        <div class="card-body">
            <div class="mb-3">
                <label for="update_password_current_password" class="form-label">{{ __('Current Password') }}</label>
                <input type="password" class="form-control" name="current_password" id="update_password_current_password" value=""/>
                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" style="color: red;" />
            </div>

            <div class="mb-3">
                <label for="update_password_password" class="form-label">{{ __('New Password') }}</label>
                <input type="password" class="form-control" name="password" id="update_password_password" value=""/>
                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
            </div>

            <div class="mb-3">
                <label for="update_password_password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                <input type="password" class="form-control" name="password_confirmation" id="update_password_password_confirmation" value=""/>
                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
