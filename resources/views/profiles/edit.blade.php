<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <div><h1 class="text-3xl">Edit Profile</h1> </div>
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="/profile/{{ Auth::id() }}/" enctype="multipart/form-data">
            @csrf
            @method('put');

            <!-- Name -->
            <div>
                <x-label for="location" :value="__('Location')" />

                <x-input id="location" class="block mt-1 w-full" type="text" name="location" :value="old('location')" required autofocus />
            </div>

            <!-- Email Address -->
            <div>
                <x-label for="interests" :value="__('Interests')" />

                <x-input id="interests" class="block mt-1 w-full" type="text" name="interests" :value="old('interests')" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a> --}}

                <x-button class="ml-4">
                    {{ __('Edit Profile') }}
                </x-button>
            </div>


            <!-- Password -->
            {{-- <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div> --}}

            <!-- Confirm Password -->
            {{-- <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div> --}}

            <!-- Select Option Rol type -->
            {{-- <div class="mt-4">
                <x-label for="role_id" value="{{ __('Register as:') }}" />
                <select name="role_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option value="farmer">Farmer</option>
                    <option value="investor">Investor</option>
                </select>
            </div> --}}

            {{-- <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div> --}}
        </form>
    </x-auth-card>
</x-guest-layout>