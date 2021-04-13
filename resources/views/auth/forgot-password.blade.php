


        @extends('welcome')
        @section('content_body')

                <div id="reg" class="container" style="margin-top: 50px; margin-bottom : 200px;">
                    <div class="row mb-5">
                        <div class="col-md-8 offset-md-2">
                            <div class="contact-form-page">
                                <h2 class="text-center">Reset Password</h2> 
                                
                                <div class="form-contact">
        
                                    @if (session('status'))
                                        <div class="row">
                                            <div class="col-md-6 offset-md-3 col-sm-6 col-xs-12 mb-4 d-block  alert alert-info" role="alert">
                                                {{ session('status') }}
                                            </div>
                                        </div>
                                    @endif

                                    <form method="POST" action="{{ route('password.email') }}">
                                        @csrf
        
                                        <div class="row">
        
                                            <x-jet-validation-errors class="col-md-6 offset-md-3 col-sm-6 col-xs-12 mb-4 d-block  alert alert-danger" role="alert" style="list-style-type: none; "/>
        
                                            <div class="col-md-6 offset-md-3 col-sm-6 col-xs-12">
                                                <input type="email" name="email" placeholder="Email" value="{{old('email')}}">
                                            </div>
        
        
                                            <div class="col-md-6 offset-md-3 col-sm-12 col-xs-12">
                                                <input type="submit" value="Send reset link" class="form-control d-block w-100">
                                            </div>
                                            
        
                                        </div>
        
                                        
        
                                        <div class="row mt-2">
        
                                            <div class="col-md-6 offset-md-3 col-sm-12 col-xs-12">
                                                <p class="mt-2">Back to login? <a href="{{ route('login') }}" class="font-weight-bold" style="color: #FF490E;">Login</a> </p>
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
        
        
        
        
{{-- 
        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Email Password Reset Link') }}
                </x-jet-button>
            </div>
        </form>
 --}}
