@extends('admin.layout')
@section('title', 'Thêm slide ảnh')

@section("content")

<div id="content-header">
    <div id="breadcrumb"> <a href="/admin" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
            Home</a> <a href="?page=Them-Sv" class="current">&nbsp Thêm slide ảnh</a> </div>
    <h1>&nbsp Thêm slide ảnh</h1>
</div>
<!--End-breadcrumbs-->

<!--Action boxes-->
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Thêm slide ảnh</h5>
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
                    <form method="post" action="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label>Hình ảnh</label>
                            <input require type="file" name="input_img" class="form-control" accept="image/*">
                        </div>
                        <div class="form-group">
                            <label>Thứ tự</label>
                            <input require type="number" min="0" value="0" name="index" class="form-control">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Thêm</button>
                            <a href="/admin/slideshow" class="btn btn-default">Trở lại</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
