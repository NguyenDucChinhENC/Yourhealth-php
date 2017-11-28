@extends('main')
@section('content')
    <div class="container">
        <div class="jumbotron">
            @include('layouts.search')
        </div>
            @for ($i=0;$i<count($coachs);$i++)
                @if (count($lists[$i]))
                {{--<div class="block">--}}
                <h3 href="/coach/{{$coachs[$i]->id}}" class="block-title" style="background-color: #e34619; padding: 25px; margin-top: 55px;  color: white">
                    {{--<div class="col-md-4">--}}
                    Coach: <strong href="/coach/{{$coachs[$i]->id}}">{{$coachs[$i]->name}}</strong>
                    <a href="/coach/{{$coachs[$i]->id}}"><small style="color: lightcyan"></small><i class="fa fa-plus"></i></a>
                    {{--</div>--}}
                </h3>
                    {{--<h1>{{$lists}}</h1>--}}
                <div class="item-carousel" data-toggle="owlcarousel"  data-owlcarousel-settings='{"items":3, "pagination":false, "navigation":true, "itemsScaleUp":true}'>
                    @foreach($lists[$i] as $program)
                    <div class="item">
                        <a class="overlay-wrapper">
                            <img src="{{$program->pic}}" style="height: 270px" alt="Project 1 image" class="img-responsive underlay">
                            <span class="overlay">
                  <span class="overlay-content"> <span class="h4"></span> </span>
                </span>
                        </a>
                        <div class="item-details bg-noise">
                            <h4 class="item-title">
                                <a href="/program/{{$program->id}}">{{$program->name}}</a>
                            </h4>
                            <a href="/program/{{$program->id}}" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>
                        </div>
                    </div>
                        @endforeach
                </div>
                {{--</div>--}}
            @endif

            @endfor
        </div>
@endsection