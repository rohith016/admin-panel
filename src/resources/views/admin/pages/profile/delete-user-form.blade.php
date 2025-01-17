<div>
    <div class="card-header"><div class="card-title"> {{ __('Delete Account') }}</div></div>
    <form method="post" action="{{ route('profile.destroy') }}" class="">
        @csrf
        @method('delete')

        <div class="card-body">
            <h3 class="text-lg font-medium text-gray-900">
                {{ __('Are you sure you want to delete your account?') }}
            </h3>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>


            <div class="mb-3">
                <label for="password" class="form-label">{{ __('Password') }}</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Current Password" value=""/>
                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" style="color: red;" />
            </div>
        </div>

        <div class="card-footer">
            {{-- <button class="btn btn-secondary" onclick="$dispatch('close')">{{ __('Cancel') }}</button> --}}
            <button type="submit" class="btn btn-danger">Submit</button>
        </div>
    </form>
</div>
