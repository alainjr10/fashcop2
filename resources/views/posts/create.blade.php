{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <!-- Select Option Rol type -->
            <div class="mt-4">
                <x-label for="role_id" value="{{ __('Register as:') }}" />
                <select name="role_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option value="farmer">Farmer</option>
                    <option value="investor">Investor</option>
                </select>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}



<div class="container col-11">
    <form action="/p" enctype="multipart/form-data" method="POST">

        @csrf
        
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1> Add A New Project</h1>
                </div>
                <div class="form-group row">
                    <x-label for="caption" class="col-md-4 col-form-label"/>Project name</label>
                    <x-input id="caption" type="text" class="form-control @error('caption') is-invalid 
                        @enderror" name="caption" value="{{ old('caption') }}"  autocomplete="caption" autofocus/>
                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                </div>

                <div class="form-group row">
                    <label for="location" class="col-md-4 col-form-label">Location</label>
                    <input id="location" type="text" class="form-control @error('location') is-invalid 
                        @enderror" name="location" value="{{ old('location') }}"  autocomplete="location" autofocus>   
                    @error('location')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror    
                </div>

                <div class="form-group row">
                    <label for="budget" class="col-md-4 col-form-label">Estimated Budget</label>
                    <input id="budget" type="text" class="form-control @error('budget') is-invalid 
                        @enderror" name="budget" value="{{ old('budget') }}"  autocomplete="budget" autofocus>   
                    @error('budget')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror    
                </div>

                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Project Preview Image</label>
                    <input type="file" class="form-control-file" id="image" name="image">
        
                    @error('image')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary"> Add New Project</button>
                </div>
            </div>
        </div>

    </form>
</div>
