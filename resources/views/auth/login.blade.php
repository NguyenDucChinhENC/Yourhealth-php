<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Update Info</title>
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
    <!--Your custom colour override - predefined colours are: colour-blue.css, colour-green.css, colour-lavander.css, orange is default-->
    <link href="#" id="colour-scheme" rel="stylesheet">

    <!-- =======================================================
      Theme Name: Flexor
      Theme URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
      Author: BootstrapMade.com
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<!-- ======== @Region: body ======== -->

<body class="fullscreen-centered page-register">
<!--Change the background class to alter background image, options are: benches, boots, buildings, city, metro -->
<div id="background-wrapper" class="benches" data-stellar-background-ratio="0.8">

    <!-- ======== @Region: #content ======== -->
    <div id="content">
        <div class="header">
            <div class="header-inner">
                <!--navbar-branding/logo - hidden image tag & site name so things like Facebook to pick up, actual logo set via CSS for flexibility -->
                <a class="navbar-brand center-block" href="{{route('home')}}" title="Home">
                    <h1 class="hidden">
                        <img src="img/logo.png" alt="Flexor Logo">
                        Login
                    </h1>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Login
                        </h3>
                    </div>
                    <div class="panel-body">
                        @if(count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    {{$err}}<br>
                            </div>
                            @endforeach
                        @endif

                        @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                        @endif
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Password</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Login
                                        </button>

                                        <a class="btn btn-link" href="{{ route('register') }}">
                                            Don't have account?
                                        </a>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
</div>
<!-- Required JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/stellar/stellar.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="contactform/contactform.js"></script>

<!-- Template Specisifc Custom Javascript File -->
<script src="js/custom.js"></script>

<!--Custom scripts demo background & colour switcher - OPTIONAL -->
<script src="js/color-switcher.js"></script>

<!--Contactform script -->
<script src="contactform/contactform.js"></script>

</body>

</html>
