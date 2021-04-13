@extends('welcome')
@section('content_body')
    


        <div id="reg" class="container">
            <div class="row mb-5">
                <div class="col-md-8 offset-md-2">
                    <div class="contact-form-page">
                        <h2 class="text-center">Registration</h2> 
                        
                        <div class="form-contact">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                   

                                <div class="row">

                                    <x-jet-validation-errors class="col-md-6 offset-md-3 col-sm-6 col-xs-12 mb-4 d-block  alert alert-info" role="alert" style="list-style-type: none; "/>

                                    <div class="col-md-6 offset-md-3 col-sm-6 col-xs-12">
                                        <input type="text" name="name" placeholder="Name" value="{{old('name')}}">

                                        {{-- @error('name')
                                                        <span class="text-danger">{{$message}}</span>
                                        @enderror --}}
                                    </div>

                                    <div class="col-md-6 offset-md-3 col-sm-6 col-xs-12">
                                        <input type="email" name="email" placeholder="Email" value="{{old('email')}}">

                                        @error('email')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                        @enderror

                                    </div>

                                    <div class="col-md-6 offset-md-3 col-sm-12 col-xs-12">
                                        <input type="number" name="phone" placeholder="Phone number" value="{{old('phone')}}">

                                        @error('phone')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                        @enderror

                                    </div>

                                    <div class="col-md-6 offset-md-3 col-sm-12 col-xs-12">
                                        <input type="password" name="password" placeholder="Set password" >

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
                                        <input type="submit" value="Registration" class="form-control d-block w-100">
                                    </div>
                                    

                                </div>

                                <div class="row mt-2">
                                    <div class="col-md-6 offset-md-3 col-sm-12 col-xs-12">
                                        <p class="mt-2">Already Registered? <a href="{{route('login')}}" class="font-weight-bold" style="color: #FF490E;">Login</a> </p>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



            {{-- <form method="POST" action="{{ route('register') }}">
                @csrf

                <div>
                    <x-jet-label for="name" value="{{ __('Name') }}" />
                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
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
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-jet-button class="ml-4">
                        {{ __('Register') }}
                    </x-jet-button>
                </div>
            </form> --}}

@endsection



