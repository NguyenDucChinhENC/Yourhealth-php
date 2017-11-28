@extends('main')

@section('slidehome')
 <div class="hero" id="highlighted">
      <div class="inner">
        <!--Slideshow-->
        <div id="highlighted-slider" class="container">
          <div class="item-slider" data-toggle="owlcarousel" data-owlcarousel-settings='{"singleItem":true, "navigation":true, "transitionStyle":"fadeUp"}'>
            <!--Slideshow content-->
            <!--Slide 1-->
            <div class="item">
              <div class="row">
                <div class="col-md-6 col-md-push-6 item-caption">
                  <h2 class="h1 text-weight-light">
                      Chào mừng tới <span class="text-primary">Flexor</span>
                    </h2>
                  <h4>
                      Sức khỏe là vốn quý nhất của con người - Hãy cùng chia sẻ những bí quyết chăm sóc và giữ gìn sức khỏe cho bản thân và gia đình
                    </h4>
                  <p>Hiện chúng tôi đã có mặt trên 7 thành phố lớn trên khắp Việt Nam, hãy chọn trung tâm phù hợp nhất để bắt đầu tập luyện với cách giảm cân nhanh nhất của chúng tôi hoặc khám phá thêm về những trung tâm sắp mở cửa gần nơi bạn sống</p>
                  <a href="https://bootstrapmade.com" class="btn btn-more btn-lg i-right">Đăng Kí Ngay<i class="fa fa-plus"></i></a>
                </div>
                <div class="col-md-6 col-md-pull-6 hidden-xs">
                  <img src="../img/slide1.png" alt="Slide 1" class="center-block img-responsive">
                </div>
              </div>
            </div>
            <!--Slide 2-->
            <div class="item">
              <div class="row">
                <div class="col-md-6 text-right-md item-caption">
                  <h2 class="h1 text-weight-light">
                      <span class="text-primary">Flexor</span> Vĩnh Biệt Mỡ Thừa
                    </h2>
                  <h4>HƠI THỞ YOGA GIÚP BẠN GIẢM CÂN & THƯ GIÃN</h4>
                  <p>Yoga giúp bạn thở sâu, nhẹ và đều đặn. Sự hô hấp này được chứng minh là cung cấp đủ lượng oxy cho từng tế bào và đốt cháy các tế bào mỡ.</p>
                  <a href="https://bootstrapmade.com" class="btn btn-more btn-lg"><i class="fa fa-plus"></i> Learn More</a>
                </div>
                <div class="col-md-6 hidden-xs">
                  <img src="../img/slide1.png" alt="Slide 2" class="center-block img-responsive">
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
             Tập thể thao để nâng cao sức khỏe, thay đổi trạng thái hình thể.
             Cùng <span class="text-primary">Flexor</span> luyện tập mỗi ngày với các bài tập dưới đây:
             {{--<a href="about.html" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>--}}
         </h2>
     </div>
 </div>
@endsection

@section('content')
<div class="container">
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Dashboard</div>--}}
                {{----}}
                {{--<div class="panel-body">--}}
                    {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success">--}}
                            {{--{{ session('status') }}--}}
                        {{--</div>--}}
                    {{--@endif--}}

                    {{--You are logged in!--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

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
                    Chương trình tập luyện
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
            {{ $programs->render() }}
        </div>
    </div>
</div>
</div>
@endsection
