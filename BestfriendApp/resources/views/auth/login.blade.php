<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <center>
    <div class="col-md-7 col-lg-8">
        <form method="POST" action="{{ route('login') }}">

            <img src="{{ URL('img/Logo.png') }}" alt="" width="150" height="120" class="d-inline-block align-text-top">
            <br>

            <h4 class="mb-3">ล็อกอินเข้ามาเลย</h4>
            @csrf

            <!-- Email Address -->
            <div class="form-floating">
                <input type="email" class="form-control" id="email" name="email" placeholder="email" required autofocus autocomplete="username">
                <label for="email">email</label>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->

            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="password" required autocomplete="current-password">
                <label for="password">password</label>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button class="ms-3" style="background-color: #ff66c4;">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</center>
<br>
    
</x-guest-layout>
