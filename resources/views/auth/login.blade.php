
@extends('welcome')
@section('content_body')

        <div id="reg" class="container">
            <div class="row mb-5">
                <div class="col-md-8 offset-md-2">
                    <div class="contact-form-page">
                        <h2 class="text-center">Login</h2> 
                        
                        <div class="form-contact">

                            @if (session('status'))
                                <div class="row">
                                    <div class="col-md-6 offset-md-3 col-sm-6 col-xs-12 mb-4 d-block  alert alert-info" role="alert">
                                            {{ session('status') }}
                                    </div>
                                </div>
                            @endif

                            <form method="POST" action="{{ isset($guard) ? url($guard.'/login') :  route('login') }}">
                                @csrf

                                <div class="row">

                                    <x-jet-validation-errors class="col-md-6 offset-md-3 col-sm-6 col-xs-12 mb-4 d-block  alert alert-info" role="alert" style="list-style-type: none; "/>

                                    <div class="col-md-6 offset-md-3 col-sm-6 col-xs-12">
                                        <input type="email" name="email" placeholder="Email" value="{{old('email')}}">

                                        @error('email')
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
                                        <input type="submit" value="Login" class="form-control d-block w-100">
                                    </div>
                                    

                                </div>

                                

                                <div class="row mt-2">

                                    <div class="col-md-6 offset-md-3 col-sm-12 col-xs-12">
                                        <p class="mt-2">Forgot your password? <a href="{{ route('password.request') }}" class="font-weight-bold" style="color: #FF490E;">Reset password</a> </p>
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



