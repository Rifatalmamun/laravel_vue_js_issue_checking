<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/simulor/layouts/light/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Apr 2021 03:55:40 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Simulor - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon.ico')}}">

        <link rel="stylesheet" href="{{asset('css/app.css')}}"> 

        <link href="{{asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    </head> 

    <body class="authentication-bg">
        <div class="home-btn d-none d-sm-block">
            <a href="index.html"><i class="fas fa-home h2 text-dark"></i></a>
        </div>
        <div class="account-pages my-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card">

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <a href="index.html">
                                        <span><img src="{{asset('media/jj.png')}}" alt="" height="22"></span>
                                    </a> 
                                </div>

                                {{-- @if (isset($guard))
            
                                    <h3>Admin Login</h3>    

                                @else
                                    <h3>User Login</h3>    
                                @endif --}}

                                @if (session('status'))
                                    <div class="mb-4 font-medium text-sm text-green-600">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <form method="POST" action="{{url($guard.'/login')}}">
                                    @csrf

                                    <div class="form-group mb-3">
                                        <label for="emailaddress">Email address</label>
                                        <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email" name="email">
                                    </div>

                                    <div class="form-group mb-3">
                                        <a href="pages-recoverpw.html" class="text-muted float-right"><small></small></a>
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" required="" id="password" placeholder="Enter your password" name="password">
                                    </div>
                                    
                                    <div class="form-group mb-0 text-center"> 
                                        <input type="submit" class="btn btn-primary btn-block" value="Log In">
                                    </div>  

                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>



        <script src="{{asset('backend/assets/js/vendor.min.js')}}"></script>  
        <script src="{{asset('backend/assets/js/app.min.js')}}"></script> 
        <script src="{{asset('js/app.js')}}"></script>
        
    </body>
</html>



