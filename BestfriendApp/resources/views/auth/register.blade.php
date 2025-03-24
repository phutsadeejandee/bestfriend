<x-guest-layout>
<center>
    <br>
    <div class="col-md-7 col-lg-8">
        <form method="POST" action="{{ route('register') }}">
            <img src="{{ URL('img/Logo.png') }}" alt="" width="150" height="120" class="d-inline-block align-text-top">
            <br>

            <h4 class="mb-3">ลงทะเบียนก่อนนะ</h4>
            

            @csrf

            <!-- Name -->
        
            <div class="form-floating">
                <input type="name" class="form-control" id="name" name="name" placeholder="name" required autocomplete="name">
                <label for="name">name</label>
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->

            <div class="form-floating">
                <input type="email" class="form-control" id="email" name="email" placeholder="email" required autocomplete="email">
                <label for="email">email</label>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->

            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="password" required autocomplete="password">
                <label for="password">password</label>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div> -->

            <!-- Confirm Password -->

            <div class="form-floating">
                <input type="password" class="form-control" id="password_confirmation" placeholder="password" name="password_confirmation" required autocomplete="new-password">
                <label for="password_confirmation">Confirm Password</label>
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
        
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ms-4" style="background-color: #ff66c4;">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </div>
    
</center>
<br>
</x-guest-layout>
