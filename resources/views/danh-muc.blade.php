@extends('home')
@section("content")
<div class="row" style="margin-bottom:200px">
    <!-- 8 col -->
    <div class="col-md-9 col-sm-12">
        <!-- slide -->
        <div id="slideshow" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                @foreach($slides as $item)

                <li data-target="#slideshow" data-slide-to="{{$loop->iteration}}" class="{{$loop->iteration == 1?'active':''}}"></li>
                @endforeach
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner">
                @foreach($slides as $item)
                <div class="carousel-item  {{$loop->iteration == 1?'active':''}}">
                    <img src="/upload/slide/{{$item->hinhanh}}" alt="slide {{$loop->iteration}}">
                    <div class="carousel-text"><a href="#">slide {{$loop->iteration}}</a></div>
                </div>
                @endforeach
            </div>
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#slideshow" data-slide="prev"> <span class="carousel-control-prev-icon"></span>
            </a> <a class="carousel-control-next" href="#slideshow" data-slide="next"> <span class="carousel-control-next-icon"></span>
            </a>
        </div> <!-- end slide -->
        <!-- list category -->
        <div class="row">
            <div class="col-md-12">
                @foreach($baiviets as $baiviet)
                <article class="news">
                    <div class="row">
                        <div class="col-md-4"><img class="img-thumbnail" src="/upload/baiviet/{{$baiviet->hinhanh}}"></div>
                        <div class="col-md-8 no-padding">
                            <a href="/chi-tiet-tin-tuc/{{$baiviet->id}}">{!!$baiviet->tenbaiviet!!}</a>
                            <h5 style="font-size: 14px;">{!!$baiviet->mota!!}</h5>
                        </div>
                    </div>
                    <div class="dotted"></div>
                </article>
                @endforeach
            </div>
        </div>
    </div>
    <!-- end 8 col -->
    <!-- 4 col -->
    <div class="col-md-3 col-sm-12">
        <aside class="sticky">
            <!-- category -->
            <h5 class="box-right-title">Danh mục</h5>
            <div class="card">
                <ul class="list-group list-group-flush category-box">
                    @foreach($danhmucs as $danhmuc)
                    <li class="list-group-item">
                        <a href="/danh-muc/{{$danhmuc->id}}">{{$danhmuc->tendanhmuc}}</a>
                    </li>
                    @endforeach
                </ul>
            </div> <!-- end category -->
            <!-- hot news -->
            <h5 class="box-right-title">Tin nổi bật</h5>
            <div class="card" style="margin-top: 20px; height: 300px; margin-top:0px;">
                <div class="card-body">
                    <marquee behavior="scroll" direction="up" onMouseOver="this.setAttribute('scrollamount', 0, 0);this.stop();"
                        OnMouseOut="this.setAttribute('scrollamount', 2, 0);this.start();" height="250px" scrollamount="2">
                        <ul class="hot-news" style="padding:0px; margin:0px; list-style: none;">
                            @foreach($tinnoibats as $tinnoibat)
                            <li>
                                <a href="/chi-tiet-tin-tuc/{{$tinnoibat->id}}">{{$tinnoibat->tenbaiviet}}</a>
                                <div class="dotted"></div>
                            </li>
                            @endforeach
                        </ul>
                    </marquee>
                </div>
            </div> <!-- end hotnews -->
            <!-- adv -->
            <div class="card" style="margin-top: 20px; margin-top:5px;"> <img class="img-thumbnail" src="/frontend/images/adv2.png"
                    style="margin-bottom: 5px;"> </div>
            <!-- end adv -->
        </aside>
    </div>
</div>

@endsection
