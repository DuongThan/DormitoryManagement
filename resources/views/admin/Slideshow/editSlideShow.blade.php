@extends('admin.layout')
@section('title', 'Chỉnh sửa slide ảnh')

@section("content")

<div id="content-header">
    <div id="breadcrumb"> <a href="/admin" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
            Home</a> <a href="?page=Them-Sv" class="current">&nbsp Chỉnh sửa slide ảnh</a> </div>
    <h1>&nbsp Chỉnh sửa slide ảnh</h1>
</div>
<!--End-breadcrumbs-->

<!--Action boxes-->
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Chỉnh sửa slide ảnh</h5>
                </div>
                @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                    {{$err}} <br>
                    @endforeach
                </div>
                @endif
                @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
                @endif
                <div class="widget-content">
                    <form enctype="multipart/form-data" method="post" action="/admin/slideshow/put/{{$slideshow->id}}">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <img src="/upload/slide/{{$slideshow->hinhanh}}" alt="" style="width: 100%;">
                        </div>
                        <div class="form-group">
                            <label>Hình ảnh</label>
                            <input require type="file" name="input_img" class="form-control" accept="image/*">
                        </div>
                        <div class="form-group">
                            <label>Thứ tự</label>
                            <input value="{{$slideshow->thutu}}" require type="number" min="0" value="0" name="index"
                                class="form-control">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                            <a href="/admin/slideshow" class="btn btn-default">Trở về danh sách slide ảnh</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
