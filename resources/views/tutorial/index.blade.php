@extends('main')
@section('content')
    <div class="mission text-center block block-pd-sm block-bg-noise">
        <div class="container">
            <h2 class="text-shadow-white">
                Các bài tập phù hợp với thể trạng của bạn là <span class="text-primary"></span>
                {{--<a href="about.html" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>--}}
            </h2>
        </div>
    </div>
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
    </div>
@endsection