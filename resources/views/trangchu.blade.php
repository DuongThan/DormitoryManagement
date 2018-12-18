@extends('home')
@section("content")
<div class="row">
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
        <h5 class="box-main-title">Tin tức</h5>
        <div class="row">
            <!-- news -->
            <div class="col-md-6 col-sm-12">
                <article class="news">
                    <figure> <img class="img-thumbnail" src="/upload/baiviet/{{$tinxahois[0]->hinhanh}}">
                        <figcaption><a href="/chi-tiet-tin-tuc/{{$tinxahois[0]->id}}">
                                <h6>{!!$tinxahois[0]->tenbaiviet!!}</h6>
                            </a> </figcaption>
                    </figure>
                    <p>
                        <p>{!!$tinxahois[0]->mota!!}</p>
                    </p>
                </article>
            </div>
            <!-- end news -->
            <!-- news -->
            <div class="col-md-6 col-sm-12">
                @foreach($tinxahois as $tinxahoi)
                <article class="news">
                    <div class="row">
                        <div class="col-md-4"><img class="img-thumbnail" src="/upload/baiviet/{{$tinxahoi->hinhanh}}"></div>
                        <div class="col-md-8 no-padding">
                            <a href="/chi-tiet-tin-tuc/{{$tinxahoi->id}}">{!!$tinxahoi->tenbaiviet!!}</a>
                        </div>
                    </div>
                    <div class="dotted"></div>
                </article>
                @endforeach
            </div>
            <!-- end news -->
        </div>
        <!-- end list category -->
        <!-- list category -->
        <h5 class="box-main-title">Sự kiện</h5>
        <div class="row">
            <!-- news -->
            <div class="col-md-6 col-sm-12">
                <article class="news">
                    <figure> <img class="img-thumbnail" src="/upload/baiviet/{{$tinsukiens[0]->hinhanh}}">
                        <figcaption><a href="/chi-tiet-tin-tuc/{{$tinsukiens[0]->id}}">
                                <h6>{!!$tinsukiens[0]->tenbaiviet!!}</h6>
                            </a> </figcaption>
                    </figure>
                    <p>
                        <p>{!!$tinsukiens[0]->mota!!}</p>
                    </p>
                </article>
            </div>
            <!-- end news -->
            <!-- news -->
            <div class="col-md-6 col-sm-12">
                @foreach($tinsukiens as $tinsukien)
                <article class="news">
                    <div class="row">
                        <div class="col-md-4"><img class="img-thumbnail" src="/upload/baiviet/{{$tinsukien->hinhanh}}"></div>
                        <div class="col-md-8 no-padding">
                            <a href="/chi-tiet-tin-tuc/{{$tinsukien->id}}">{!!$tinsukien->tenbaiviet!!}</a>
                        </div>
                    </div>
                    <div class="dotted"></div>
                </article>
                @endforeach
            </div>
            <!-- end news -->
        </div>
        <!-- end list category -->

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
    <!-- end 4 col -->
</div>

@endsection
