{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>PhoneMate</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset ('css/style.css')}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset ('css/responsive.css')}}">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset ('css/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" href="{{asset ('https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css')}}">
    <!--stylesheets -->
    <link rel="stylesheet" href="{{asset ('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset ('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset ('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset ('css/cart.css')}}">
    <link rel="stylesheet" href="{{asset ('https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css')}}" media="screen">

    <link rel="stylesheet" type="text/css" href="{{asset('Auth/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('Auth/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('Auth/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('Auth/owl.carousel.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('Auth/chosen.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('Auth/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('Auth/color-01.css')}}">
    @livewireStyles

</head>
<!-- body -->

<body class="main-layout ">
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">

            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo"; style="padding-right: 20px">
                                    <a href="/"><img src="{{asset('images/Logo2.PNG')}}" alt="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li class="active"> <a href="/">Home</a> </li>
                                        <li> <a href="/Aboutus">About us</a></li>
                                        <li><a href="/Phonebrands">Phone Brands</a></li>
                                        <li><a href="/shop">Shop</a></li>
                                        <li><a href="/Contactus">Contact us</a></li>


                                        <li class="last">
                                            <a href="/Cart"><img src="{{asset('images/cart.png')}}" alt="icon" /></a>
                                        </li>
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 offset-md-6">
                        <div class="location_icon_bottum">
                            <ul style="height: 70px">  
                                <li class="last">
                                    <form class="form-inline my-2 my-lg-0" id="logout-form" method="POST" action="{{route('logout')}}">
                                        <input class="form-control mr-sm-2" type="text" placeholder="Search..."; style="height: 35px">
                                        <a href="#"; style="margin-bottom: 35px"><img src="{{asset('images/search_icon.png')}}" alt="icon" /></a>
                                    
                                    @if(Route::has('login'))
                                  @auth
                                    @if(Auth::user()->utype=== 'ADM')
                                    <div class="dropdown" style="margin-bottom: 40px">
                                        <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          My Account
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                          <a class="dropdown-item" href="#">{{Auth::user()->name}}</a>
                                          <a class="dropdown-item" href="{{route('admin.dashboard')}}">Dashboard</a> 
                                          <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                            @csrf
                                        </div>
                                      </div>
                                    @else   
                                    <div class="dropdown" style="margin-bottom: 40px" > 
                                    <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        My Account
                                      </button>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">{{Auth::user()->name}}</a>
                                        <a class="dropdown-item" href="{{route('user.dashboard')}}">Dashboard</a>
                                        <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                          @csrf                        
                                     </div>
                                    </div>
                                    @endif
                                  @else
                                  <div>
                                  
                                    
                                    <button type="button" class="btn btn-dark" style="margin-bottom: 0cm"><a href="{{route('login')}}"; style="color:white;">Login</a></button>
                                    <button type="button" class="btn btn-dark" style="margin-bottom: 0cm"><a href="{{route('register')}}"; style="color:white;">Register</a></button>
                                    
                                    
                                  </div> 
                                  @endif 
                                  @endif
                                  </form>
                                </li> 

                                
                            </ul>
                        </div>
                    </div>
                 </div>
           {{$slot}}        

    <!-- footer -->
    <footer>
        <div id="contact" class="footer">
            <div class="container">
                <div class="row pdn-top-30">
                    <div class="col-md-12 ">
                        <div class="footer-box">
                            <div class="headinga">
                                <h3>Address</h3>
                                <span>Aramoun Mian Road, Infront of Jawhari Station, PhoneMate 1st Floor</span>
                                <p>81/895453 -- 78/806084 -- 70/613904
                                    <br>ibrahimmonajjed997@gmail.com</p>
                            </div>
                            <ul class="location_icon">
                                <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="#"><i class="fa fa-instagram"></i></a></li>

                            </ul>
                            <div class="menu-bottom">
                                <ul class="link">
                                    <li> <a href="#">Home</a></li>
                                    <li> <a href="#">About</a></li>
                                    
                                    <li> <a href="#">Phone Brands </a></li>
                                    <li> <a href="#">Shop  </a></li>
                                    <li> <a href="#"> Contact us</a></li>
                                    <li><a href="#">Login</a></li>
                                    <li><a href="#">Register</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p>© 2021 All Rights Reserved. Designed By Rafik Hariri Seniors 2021</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/popper.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('js/jquery-3.0.0.min.js')}}"></script>
    <script src="{{ asset('js/plugin.js')}}"></script>
    <!-- sidebar -->
    <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{ asset('js/custom.js')}}"></script>
    <!-- javascript -->
    <script src="{{ asset('js/owl.carousel.js')}}"></script>
    <script src="{{ asset('https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js')}}"></script>
    <script src="{{ asset('https://kit.fontawesome.com/238f5de084.js" crossorigin="anonymous')}}"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
    @livewireScripts
</body>

</html>