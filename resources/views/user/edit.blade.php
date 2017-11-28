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
                        Flexor
                    </h1>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Update User
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
                        <form accept-charset="UTF-8" role="form" action="edit" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" />
                            <fieldset>
                                <div class="form-group">
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon"><i class="fa fa-fw fa-user"></i></span>
                                        <input type="text" id="username" name="username" class="form-control" placeholder="Username" value="{{$user->username}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon"><i class="fa fa-fw fa-envelope"></i></span>
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Name" value="{{$user->name}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon"><i class="fa fa-fw fa-lock"></i></span>
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="{{$user->email}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon"><i class="fa fa-fw fa-lock"></i></span>
                                        <input type="date" id="birthday" name="birthday" class="form-control" placeholder="Birthday" value="{{$user->birthday}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon"><i class="fa fa-fw fa-lock"></i></span>
                                        <input type="tel" id="address" name="address" class="form-control" placeholder="Address" value="{{$user->address}}">
                                    </div>
                                </div>
                                    <div class="form-group">
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon"><i class="fa fa-fw fa-lock"></i></span>
                                        <input type="number" id="weight" name="weight" class="form-control" placeholder="Weight" value="{{$user->weight}}">
                                    </div>
                                </div><div class="form-group">
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon"><i class="fa fa-fw fa-lock"></i></span>
                                        <input type="text" id="job" name="job" class="form-control" placeholder="Job" value="{{$user->job}}">
                                    </div>
                                </div>
                                <input class="btn btn-lg btn-primary btn-block" type="submit" value="Update Infomation">
                            </fieldset>
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
