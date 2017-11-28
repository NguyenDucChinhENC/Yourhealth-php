@extends('main')
@section('content')
<div id="content">
    <div class="container" id="about">
      <div class="row">
        <!--main content-->
        <div class="col-md-9 col-md-push-3">
          <div class="page-header">
            <h1>
                {{Auth::user()->name}}
                <small>
                	<? if (Auth::user()->coach): ?>
                		Coach
                	<? endif; ?>
                	<? if (Auth::user()->practitioner): ?>
                		Practitioner
                	<? endif; ?>
                </small>
              </h1>
          </div>
          <div class="block-highlight block-pd-h block-pd-sm">
          	<div class="col-md-6">
          	<h4 class="block-title">
          		Name: <i>{{Auth::user()->name}}</i>
          	</h4>
          </div>
          <div class="col-md-6">
          	<h4 class="block-title">
          		User Name: <i>{{Auth::user()->username}}</i>
          	</h4>
          </div>
            <hr>
            <div class="col-md-6">
              <h4 class="block-title">
                Email: <i>{{Auth::user()->email}}</i>
              </h4>
            </div>
            <div class="col-md-6">
              <h4 class="block-title">
                Birthday: <i>{{Auth::user()->birthday}}</i>
              </h4>
            </div>
            <div class="col-md-6">
              <h4 class="block-title">
                Address: <i>{{Auth::user()->address}}</i>
              </h4>
            </div>
            <div class="col-md-6">
              <h4 class="block-title">
                Weight: <i>{{Auth::user()->weight}}</i>
              </h4>
            </div>
            <div class="col-md-6">
              <h4 class="block-title">
                Job: <i>{{Auth::user()->job}}</i>
              </h4>
            </div>
        	<hr>
            <div class="col-md-12">
              <p class="m-a-0 pull-right">
                <a href="/user/edit" class="btn btn-more btn-lg i-right">Update Information<i class="fa fa-angle-right"></i></a>
              </p>
            </div>

          </div>
          {{--<div class="block-highlight block-pd-h block-pd-sm">--}}
            {{--<h3 class="block-title">--}}
                {{--Our Mission--}}
              {{--</h3>--}}
            {{--<p class="text-fancy">Vel in amet mauris? Turpis pulvinar a proin tincidunt pid, vel odio lundium sit, cras. Duis mattis porttitor nunc elementum eros, in turpis nec. Lectus dictumst risus ut ac porta, urna ac vel, a ut dis!</p>--}}
          {{--</div>--}}
          {{--<div class="block">--}}
            {{--<h3 class="block-title">--}}
                {{--Vital Stats--}}
              {{--</h3>--}}
            {{--<div class="row">--}}
              {{--<div class="col-md-4">--}}
                {{--<div class="stat">--}}
                  {{--<span data-counter-up>1000</span>s--}}
                  {{--<small>Happpy Customers</small>--}}
                {{--</div>--}}
              {{--</div>--}}
              {{--<div class="col-md-4">--}}
                {{--<div class="stat">--}}
                  {{--<span data-counter-up>163</span>+--}}
                  {{--<small>GB Transfered</small>--}}
                {{--</div>--}}
              {{--</div>--}}
              {{--<div class="col-md-4">--}}
                {{--<div class="stat">--}}
                  {{--<span data-counter-up>214</span>--}}
                  {{--<small>Bugs Fixed</small>--}}
                {{--</div>--}}
              {{--</div>--}}
            {{--</div>--}}
          {{--</div>--}}
        </div>
        <!-- sidebar -->
        <div class="col-md-3 col-md-pull-9 sidebar visible-md-block visible-lg-block">
          <ul class="nav nav-pills nav-stacked">
            <li class="active">
              <a href="about.html" class="first">
                  About {{Auth::user()->name}}
                  <small>How It All Began</small>
                </a>
            </li>
            {{--<li>--}}
              {{--<a href="#">--}}
                  {{--The Team--}}
                  {{--<small>Our team of stars</small>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
              {{--<a href="#">--}}
                  {{--Contact Us--}}
                  {{--<small>How to get in touch</small>--}}
                {{--</a>--}}
            {{--</li>--}}
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Call out block -->
  <div class="block block-bg-primary block-bg-overlay block-bg-overlay-5 text-center" data-block-bg-img="https://picjumbo.imgix.net/HNCK8991.jpg?q=40&amp;w=1650&amp;sharp=30" data-stellar-background-ratio="0.3">
    <h2 class="m-t-0">
        Be part of our amazing team!
      </h2>
    <p class="m-a-0">
      <a href="#" class="btn btn-more btn-lg i-right">We're Hiring
        <i class="fa fa-angle-right"></i></a>
    </p>
  </div>
  <!-- Call out block -->
  <div class="block block-pd-sm block-bg-primary">
    <div class="container">
      <div class="row">
        <h3 class="col-md-4">
            Some of our Clients
          </h3>
        <div class="col-md-8">
          <div class="row">
            <!--Client logos should be within a 120px wide by 60px height image canvas-->
            <div class="col-xs-6 col-md-2">
              <a href="https://bootstrapmade.com" title="Client 1">
                  <img src="img/clients/client1.png" alt="Client 1 logo" class="img-responsive">
                </a>
            </div>
            <div class="col-xs-6 col-md-2">
              <a href="https://bootstrapmade.com" title="Client 2">
                  <img src="img/clients/client2.png" alt="Client 2 logo" class="img-responsive">
                </a>
            </div>
            <div class="col-xs-6 col-md-2">
              <a href="https://bootstrapmade.com" title="Client 3">
                  <img src="img/clients/client3.png" alt="Client 3 logo" class="img-responsive">
                </a>
            </div>
            <div class="col-xs-6 col-md-2">
              <a href="https://bootstrapmade.com" title="Client 4">
                  <img src="img/clients/client4.png" alt="Client 4 logo" class="img-responsive">
                </a>
            </div>
            <div class="col-xs-6 col-md-2">
              <a href="https://bootstrapmade.com" title="Client 5">
                  <img src="img/clients/client5.png" alt="Client 5 logo" class="img-responsive">
                </a>
            </div>
            <div class="col-xs-6 col-md-2">
              <a href="https://bootstrapmade.com" title="Client 6">
                  <img src="img/clients/client6.png" alt="Client 6 logo" class="img-responsive">
                </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 @endsection
