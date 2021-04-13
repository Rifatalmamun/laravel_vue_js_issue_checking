


<!DOCTYPE HTML>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta name="description" content="jj" />
	<meta name="keywords" content="kuteshop,7uptheme" />
	<meta name="robots" content="noodp,index,follow" />
	<meta name='revisit-after' content='1 days' />

    @guest
        <meta name="user-id" content="0" />
    @else 
        <meta name="user-id" content="1" />
    @endguest

    

	<title>Ecom</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}"> 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/libs/font-awesome.min.css')}}"/> 
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/libs/bootstrap.min.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/libs/bootstrap-theme.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/libs/jquery.fancybox.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/libs/jquery-ui.min.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/libs/owl.carousel.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/libs/owl.transitions.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/libs/owl.theme.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/libs/jquery.mCustomScrollbar.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/libs/animate.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/libs/hover.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/libs/flipclock.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/color-orange.css')}}" media="all"/>
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/theme.css')}}" media="all"/>
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/responsive.css')}}" media="all"/>
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/browser.css')}}" media="all"/>


	<!-- <link rel="stylesheet" type="text/css" href="css/rtl.css" media="all"/> -->

    <style>

        .form-contact input[type="email"],.form-contact input[type="number"],.form-contact input[type="password"]{
            border: 1px solid #e5e5e5;
            color: #999;
            height: 42px;
            margin-bottom: 30px;
            padding: 0 20px;
            width: 100%;
        }

    </style>

</head>
<body style="background:#f4f4f4" >

<div id="app">

    <div class="wrap">
        <div id="header">
            <div class="header">
                
                
                

            </div>

           
        </div>  

     
        <div class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="logo logo4">
                            <h1 class="hidden">Ecom</h1> 
                            <router-link to="/">Welcome</router-link>
                            <router-link to="/about" class="mx-3">About Us</router-link>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        
                    </div>
                    
                </div>
                <br>
                
            </div>
        </div>

        @yield('content_body') 

        <router-view></router-view>  


        <a href="#" class="radius scroll-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
    </div>


</div>


<script src="{{asset('js/app.js')}}"></script>

{{-- <script type="text/javascript" src="{{asset('frontend/ajax.googleapis.com/ajax/libs/jquery/1/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/libs/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/libs/jquery.fancybox.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/libs/jquery-ui.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('frontend/js/libs/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/libs/jquery.mCustomScrollbar.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/libs/flipclock.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/theme.js')}}"></script>

<script type="text/javascript" src="{{asset('frontend/js/libs/jquery.elevatezoom.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/libs/TimeCircles.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/libs/wow.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/libs/jquery.jcarousellite.js')}}"></script> --}}


</body>

</html>