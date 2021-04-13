{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Reset Password') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}





        @extends('welcome')
        @section('content_body')
            
        
        
                <div id="reg" class="container">
                    <div class="row mb-5">
                        <div class="col-md-8 offset-md-2">
                            <div class="contact-form-page">
                                <h2 class="text-center">Reset Password</h2> 
                                
                                <div class="form-contact">
        
                                    @if (session('status'))
                                        <div class="mb-4 font-medium text-sm text-green-600">
                                            {{ session('status') }}
                                        </div>
                                    @endif
        
                                    <form method="POST" action="{{ route('password.update') }}">
                                        @csrf

                                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                        <div class="row">
        
                                            <x-jet-validation-errors class="col-md-6 offset-md-3 col-sm-6 col-xs-12 mb-4 d-block  alert alert-danger" role="alert" style="list-style-type: none; "/>

                                            <div class="col-md-6 offset-md-3 col-sm-6 col-xs-12">
                                                <input type="email" name="email" placeholder="Email" value="{{old('email')}}">
        
                                                @error('email')
                                                          <span class="invalid-feedback" role="alert">
                                                              <strong>{{ $message }}</strong>
                                                          </span>
                                                @enderror
        
                                            </div>
        
                                            <div class="col-md-6 offset-md-3 col-sm-12 col-xs-12">
                                                <input type="password" name="password" placeholder="Set password" value="{{old('password')}}">
        
                                                @error('password')
                                                          <span class="invalid-feedback" role="alert">
                                                              <strong>{{ $message }}</strong>
                                                          </span>
                                                @enderror
        
                                            </div>
        
                                            <div class="col-md-6 offset-md-3 col-sm-12 col-xs-12">
                                                <input type="password" name="password_confirmation" placeholder="Re-enter password" >                                                    
                                            </div>
        
                                            <div class="col-md-6 offset-md-3 col-sm-12 col-xs-12">
                                                <input type="submit" value="Update Password" class="form-control d-block w-100">
                                            </div>
                                            
        
                                        </div>
        
                                        
        
                                        <div class="row mt-2">
        
                                            <div class="col-md-6 offset-md-3 col-sm-12 col-xs-12">
                                                <p class="mt-2">Back to login? <a href="{{ route('login') }}" class="font-weight-bold" style="color: #FF490E;">Reset password</a> </p>
                                            </div>
        
                                            <div class="col-md-6 offset-md-3 col-sm-12 col-xs-12">
                                                <p class="mt-2">Don't have account? <a href="{{route('register')}}" class="font-weight-bold" style="color: #0d9eca;">Registration</a> </p>
                                            </div>
                                        </div>
        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
        @endsection
        
        
        
        