@extends('admin.layout')
@section("content")
<div id="content-header">
    <div id="breadcrumb"> <a href="?page=dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
            Home</a> <a href="?page=Them-Sv" class="current">Cập Nhật Đơn Giá </a> </div>
    <h1>Cập Nhật Đơn Giá </h1>
</div>
<!--End-breadcrumbs-->

<!--Action boxes-->
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Cập Nhật Đơn Giá </h5>
                </div>
                @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
                @endif
                <div class="widget-box">
                    <div class="widget-title">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab1">Điện<i class="add-on icon-bolt"></i></a></li>
                            <li><a data-toggle="tab" href="#tab2">Nước<span class='add-on icon-tint'></a></li>
                        </ul>
                    </div>
                    <div class="widget-content tab-content">
                        <div id="tab1" class="tab-pane active">
                            <form action="/admin/diennuoc/capnhatdien" method="post">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <label class="control-label" class="span5 text-center">
                                    Điện(Cập nhật ngày {{$dien->ngaycapnhat}})</label>
                                <input type="number" class="span5" name="dongiadien" title="Đơn giá điện" value="{{$dien->dongia}}"><br>
                                <button class="btn btn-info" onClick="return Sua();">Cập Nhật Thêm</button>
                            </form>
                        </div>
                        <div id="tab2" class="tab-pane">
                            <form action="/admin/diennuoc/capnhatnuoc" method="post">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <label class="control-label" class="span5 text-center">
                                    Nước(Cập nhật ngày {{$nuoc->ngaycapnhat}})</label>
                                <input type="number" class="span5" name="dongianuoc" title="Đơn giá nước" value="{{$nuoc->dongia}}"><br>
                                <button class="btn btn-info" name="CapNhatNuoc" onClick="return Sua();">Cập Nhật Thêm</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
