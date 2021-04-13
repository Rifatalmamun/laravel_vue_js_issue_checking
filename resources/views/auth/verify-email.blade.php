{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-jet-button type="submit">
                        {{ __('Resend Verification Email') }}
                    </x-jet-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Logout') }}
                </button>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout> --}}


@extends('welcome')
@section('content_body')
    


        <div id="reg" class="container" style="margin-top: 50px;margin-bottom: 250px;">
            <div class="row mb-5">
                <div class="col-md-8 offset-md-2">
                    <div class="contact-form-page">
                        <h2 class="text-center">Verify your email!</h2> 

                        <div class="mb-4 text-sm text-gray-600 alert alert-info" role="alert">
                            <p style="line-height: 30px;">
                                Thanks for registration! <br> Before getting started, you just need to verify  your email address by clicking on the link we just emailed to you from jakjamok? If you didn\'t receive the email, we will gladly send you another
                            </p>
                        </div>

                        @if (session('status') == 'verification-link-sent')
                            <div class="mb-5 font-medium text-sm text-green-600">
                                A new verification link has been sent to {{Auth::user()->email}}.
                            </div>
                        @endif

                        <div style="opacity: 0;">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat ipsam consequuntur nemo illum 
                        </div>
                        
                        <div class="form-contact">

                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('verification.send') }}">
                                @csrf

                                <div class="row">
                                    
                                    <div class="col-md-6 offset-md-3 col-sm-12 col-xs-12">
                                        <input type="submit" value="Resend another verify link" class="form-control d-block w-100">
                                    </div>
                                </div>
                            </form>

                            {{-- <form method="POST" action="{{ route('logout') }}">
                                @csrf
                
                                <div class="col-md-6 offset-md-3 col-sm-12 col-xs-12">
                                        <input type="submit" value="Logout" class="form-control d-block w-100">
                                    </div>
                            </form> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection



