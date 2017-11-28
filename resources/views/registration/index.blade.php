


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Flexor </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">

    <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="img/icons/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/icons/114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/icons/72x72.png">
    <link rel="apple-touch-icon-precomposed" href="img/icons/default.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link rel="stylesheet" href="{{Asset('assets/theme/lib/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{Asset('assets/theme/lib/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{Asset('assets/theme/lib/owlcarousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{Asset('assets/theme/lib/owlcarousel/owl.theme.min.css')}}">
    <link rel="stylesheet" href="{{Asset('assets/theme/lib/owlcarousel/owl.transitions.min.css')}}">
    <link rel="stylesheet" href="{{Asset('assets/theme/lib/owlcarousel/owl.transitions.min.css')}}">
    <link rel="stylesheet" href="{{Asset('assets/theme/css/style.css')}}">
    <style>
        .background-program {
            background-image: linear-gradient(to top, rgba(0,0,0,0.8) 0%,rgba(0,0,0,0.6) 100%), url(http://watchfit.com/wp-content/uploads/2016/05/44976962_l-1024x548.jpg);
            background-size: 100%;

        }
        .pic{
            max-height: 400px;
        }
    </style>
    <link href="#" id="colour-scheme" rel="stylesheet">

    <!-- =======================================================
      Theme Name: Flexor
      Theme URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
      Author: BootstrapMade.com
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body class="page-index has-hero">
<!--Change the background class to alter background image, options are: benches, boots, buildings, city, metro -->
<div id="background-wrapper" class="background-program ">

    <!-- ======== @Region: #navigation ======== -->
    <div id="navigation" class="wrapper">
        <!--Hidden Header Region-->
        <div class="header-hidden collapse">
            <div class="header-hidden-inner ">
                <div class="row">
                    @include('layouts.search')
                </div>
            </div>
        </div>
        <!--Header & navbar-branding region-->
        <div class="header">
            <div class="header-inner container">
                <div class="row">
                    <div class="col-md-8">
                        <!--navbar-branding/logo - hidden image tag & site name so things like Facebook to pick up, actual logo set via CSS for flexibility -->
                        <a class="navbar-brand"  title="Home">
                            <h1 class="hidden">
                                <img src="img/logo.png" alt="Flexor Logo">
                                Flexor
                            </h1>
                        </a>
                        <div class="navbar-slogan">
                            Flixor Fitness
                            <br> By Flixor
                        </div>
                    </div>
                    <!--header rightside-->
                    <div class="col-md-4">
                        <!--user menu-->
                        <ul class="list-inline user-menu pull-right">
                            <li class="user-button"><a class="btn btn-primary btn-hh-trigger" role="button" data-toggle="collapse" data-target=".header-hidden">Open</a></li>
                        </ul>

                        @guest
                            <ul class="list-inline user-menu pull-right">
                                <li class="user-register"><i class="fa fa-edit text-primary "></i> <a href="register" class="text-uppercase">Register</a></li>
                                <li class="user-login"><i class="fa fa-sign-in text-primary"></i> <a href="login" class="text-uppercase">Login</a></li>
                            </ul>
                            @else
                                <ul class="list-inline user-menu pull-right">
                                    <li class="user-login"><i class="fa fa-sign-in text-primary"></i> <a
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="text-uppercase">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                                @endguest
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="navbar navbar-default">
                <!--mobile collapse menu button-->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <!--social media icons-->
                <div class="pull-right">
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav" id="main-menu">
                            @guest
                                @else
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}<b class="caret"></b></a>
                                        <!-- Dropdown Menu -->

                                        <ul class="dropdown-menu">
                                            <li class="dropdown-header">Flexor Version Pages</li>
                                            <li><a href="/user" tabindex="-1" class="menu-item">Info User</a></li>
                                            {{--<li><a href="about.html" tabindex="-1" class="menu-item">About / Inner Page</a></li>--}}
                                            {{--<li><a href="login.html" tabindex="-1" class="menu-item">Login</a></li>--}}
                                            {{--<li><a href="register.html" tabindex="-1" class="menu-item">Sign-Up</a></li>--}}
                                            <li class="dropdown-footer">Dropdown footer</li>
                                        </ul>
                                    </li>
                                    @endguest
                        </ul>
                    </div>
                    <!--@todo: replace with company social media details-->
                    <!-- <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a> -->
                </div>
                <!--everything within this div is collapsed on mobile-->
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav" id="main-menu">
                        <li class="icon-link">
                            <a href="{{route('home')}}"><i class="fa fa-home"></i></a>
                        </li>
                        <li><a href="/registration">My Pages</a></li>
                        <li><a href="/tutorial">Tutorial</a></li>
                        {{--<li class="dropdown">--}}
                        {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages<b class="caret"></b></a>--}}
                        {{--<!-- Dropdown Menu -->--}}
                        {{--<ul class="dropdown-menu">--}}
                        {{--<li class="dropdown-header">Flexor Version Pages</li>--}}
                        {{--<li><a href="elements.html" tabindex="-1" class="menu-item">Elements</a></li>--}}
                        {{--<li><a href="about.html" tabindex="-1" class="menu-item">About / Inner Page</a></li>--}}
                        {{--<li><a href="login.html" tabindex="-1" class="menu-item">Login</a></li>--}}
                        {{--<li><a href="register.html" tabindex="-1" class="menu-item">Sign-Up</a></li>--}}
                        {{--<li class="dropdown-footer">Dropdown footer</li>--}}
                        {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li><a href="#">Menu Link</a></li>--}}
                        {{--<li class="dropdown dropdown-mm">--}}
                        {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Mega Menu<b class="caret"></b></a>--}}
                        {{--<!-- Dropdown Menu -->--}}
                        {{--<ul class="dropdown-menu dropdown-menu-mm dropdown-menu-persist">--}}
                        {{--<li class="row">--}}
                        {{--<ul class="col-md-6">--}}
                        {{--<li class="dropdown-header">Websites and Apps</li>--}}
                        {{--<li><a href="#">Analysis and Planning</a></li>--}}
                        {{--<li><a href="#">User Experience / Information Architecture</a></li>--}}
                        {{--<li><a href="#">User Interface Design / UI Design</a></li>--}}
                        {{--<li><a href="#">Code &amp; Development / Implementation &amp; Support</a></li>--}}
                        {{--</ul>--}}
                        {{--<ul class="col-md-6">--}}
                        {{--<li class="dropdown-header">Enterprise solutions</li>--}}
                        {{--<li><a href="#">Business Analysis</a></li>--}}
                        {{--<li><a href="#">Custom UX Consulting</a></li>--}}
                        {{--<li><a href="#">Quality Assurance</a></li>--}}
                        {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li class="dropdown-footer">--}}
                        {{--<div class="row">--}}
                        {{--<div class="col-md-7">Like the lite version? <strong>Get the extended version of Flexor.</strong></div>--}}
                        {{--<div class="col-md-5">--}}
                        {{--<a href="https://bootstrapmade.com" class="btn btn-more btn-lg pull-right"><i class="fa fa-cloud-download"></i> Get It Now</a>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</li>--}}
                        {{--</ul>--}}
                        {{--</li>--}}
                    </ul>
                </div>
                <!--/.navbar-collapse -->
            </div>
        </div>
    </div>
    <div class="hero" id="highlighted">
        <div class="inner">
            <!--Slideshow-->
            <div id="highlighted-slider" class="container">
                <div class="item-slider">
                    <!--Slideshow content-->
                    <!--Slide 1-->
                    <div class="item">
                        <div class="row">
                            <div class="col-md-11 ">
                                <br>
                                <h3 class="text-weight-light">
                                    Your Information:
                                </h3>
                                <h2 class="h1 text-weight-light">
                                    <strong>{{$user->name}}</strong><span class="text-primary"> - Flexor</span>
                                </h2>
                                <h3 class="text-weight-light">
                                    Email: {{$user->email}}
                                </h3>
                                <h3 class="text-weight-light">
                                    Birthday: {{$user->birthday}}
                                </h3>
                                <br>
                                <a href="/user" class="btn btn-more btn-lg i-right"
                                >More Your infomation<i class="fa fa-plus"></i></a>
                                {{--<h4>--}}
                                {{--Super flexible responsive theme with a modest design touch.--}}
                                {{--</h4>--}}
                                {{--<p>Perfect for your App, Web service, company or portfolio! Magna tincidunt sociis ac integer amet non. Rhoncus augue? Tempor porttitor sed, aliquet phasellus a, nisi nunc aliquet nec rhoncus enim porttitor ultrices lacus tristique?</p>--}}
                                {{--<a href="https://bootstrapmade.com" class="btn btn-more btn-lg i-right">Đăng ký Tham gia<i class="fa fa-plus"></i></a>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mission text-center block block-pd-sm block-bg-noise">
    <div class="container">
        <h2 class="text-shadow-white">
            Các bài tập bạn đã đăng ký tham gia:
            {{--<a href="about.html" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>--}}
        </h2>
    </div>
</div>

<!-- ======== @Region: #content ======== -->
<div id="content">
    <br><br>
    <div class="container" id="about">
        <div class="row">
            <div class="container">
                @foreach ($programs as $program)
                    <div class="block block-bg-primary block-bg-overlay block-bg-overlay-5 text-center" data-block-bg-img="{{$program->pic}}" data-stellar-background-ratio="0.3">
                        <h2 class="m-t-0">
                            <strong>{{$program->name}}</strong>
                        </h2>
                        <br>
                        <p class="m-a-0">
                            <a href="/program/{{$program->id}}" class="btn btn-more btn-lg i-right">View More Ex<i class="fa fa-angle-right"></i></a>
                        </p>
                    </div>
                    <!-- Call out block -->
                    <div class="block block-pd-sm block-bg-primary">
                        <div class="container">
                            <div class="row">
                                <h3 class="col-md-4">
                                    Chương Trình Tập Luyện
                                </h3>
                                <div class="col-md-12">
                                    <p>{{$program->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>
                @endforeach
                    <div class="row">
                        <div class="col-sm-9 col-sm-offset-1" style="color: #00ad54">
                            {{ $registration->render() }}
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
{{--<div class="row">--}}
    {{--<div class="col-sm-9 col-sm-offset-1" style="color: #00ad54">--}}
        {{--{{ $programs->render() }}--}}
    {{--</div>--}}
{{--</div>--}}

<!-- ======== @Region: #footer ======== -->
<footer id="footer" class="block block-bg-grey-dark" data-block-bg-img="assets/theme/img/bg_footer-map.png" data-stellar-background-ratio="0.4">
    <div class="container">

        <div class="row" id="contact">

            <div class="col-md-3">
                <address>
                    <strong>Flexor  Inc</strong>
                    <br>
                    <i class="fa fa-map-pin fa-fw text-primary"></i> Bach Khoa - Ha Noi
                    <br>
                    <i class="fa fa-phone fa-fw text-primary"></i> 19008888
                    <br>
                    <i class="fa fa-envelope-o fa-fw text-primary"></i> info@flexor.com
                    <br>
                </address>
            </div>

            <div class="col-md-6">
                <h4 class="text-uppercase">
                    Contact Us
                </h4>
                <div class="form">
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>
            </div>

            <div class="col-md-3">
                <h4 class="text-uppercase">
                    Follow Us On:
                </h4>
                <!--social media icons-->
                <div class="social-media social-media-stacked">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages<b class="caret"></b></a>
                        <!-- Dropdown Menu -->
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">Flexor Version Pages</li>
                            <li><a href="elements.html" tabindex="-1" class="menu-item">Elements</a></li>
                            <li><a href="about.html" tabindex="-1" class="menu-item">About / Inner Page</a></li>
                            <li><a href="login.html" tabindex="-1" class="menu-item">Login</a></li>
                            <li><a href="register.html" tabindex="-1" class="menu-item">Sign-Up</a></li>
                            <li class="dropdown-footer">Dropdown footer</li>
                        </ul>
                    </li>
                    <!--@todo: replace with company social media details-->
                    <!--    <a href="#"><i class="fa fa-twitter fa-fw"></i> Twitter</a>
                       <a href="#"><i class="fa fa-facebook fa-fw"></i> Facebook</a> -->
                </div>

            </div>

        </div>

        <div class="row subfooter">
            <!--@todo: replace with company copyright details-->
            <div class="col-md-7">
                <p>Copyright © Flexor </p>
                <div class="credits">
                    <!--
                      All the links in the footer should remain intact.
                      You can delete the links only if you purchased the pro version.
                      Licensing information: https://bootstrapmade.com/license/
                      Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Flexor
                    -->
                    <a href="https://bootstrapmade.com/">Flixor Fitness Inc</a> by Flixor.com
                </div>
            </div>
            <div class="col-md-5">
                <ul class="list-inline pull-right">
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </div>

        <a href="#top" class="scrolltop">Top</a>

    </div>
</footer>

<!-- Required JavaScript Libraries -->
<script src="{{Asset('assets/theme/lib/jquery/jquery.min.js')}}"></script>
<script src="{{Asset('assets/theme/lib/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{Asset('assets/theme/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{Asset('assets/theme/lib/stellar/stellar.min.js')}}"></script>
<script src="{{Asset('assets/theme/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{Asset('assets/theme/lib/counterup/counterup.min.js')}}"></script>
<script src="{{Asset('assets/theme/contactform/contactform.js')}}"></script>

<!-- Template Specisifc Custom Javascript File -->
<!-- <script src="js/custom.js"></script> -->
<script src="{{Asset('assets/theme/js/custom.js')}}"></script>

<!--Custom scripts demo background & colour switcher - OPTIONAL -->
<!-- <script src="js/color-switcher.js"></script> -->
<script src="{{Asset('assets/theme/js/color-switcher.js')}}"></script>

<!--Contactform script -->
<!-- <script src="contactform/contactform.js"></script> -->
<script src="{{Asset('assets/theme/contactform/contactform.js')}}"></script>

</body>

</html>
