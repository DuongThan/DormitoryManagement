@extends('admin.layout')
@section('title', 'Thông tin liên hệ')

@section("content")

<div id="content-header">
    <div id="breadcrumb"> <a href="/" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
            Home</a> <a href="/" class="current">Thông tin liên hệ</a> </div>
    <h1>Thông tin liên hệ</h1>

</div>
<!--End-breadcrumbs-->

<!--Action boxes-->
<div class="container-fluid">
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Table liên hệ</h5>
        </div>
        <div class="widget-content">
            <div class="form-group">
                <label>Tên tài khoản : <b>{{$lienhe->hoten}}</b></label>
            </div>
            <div class="form-group">
                <label>Số điện thoại : <b>{{$lienhe->sodienthoai}}</b></label>
            </div>
            <div class="form-group">
                <label>Email : <b>{{$lienhe->email}}</b></label>
            </div>
            <div class="form-group">
                <label>Yêu cầu : <b>{{$lienhe->yeucau}}</b></label>
            </div>
            <div>
                <a href="/admin/lienhe" class="btn btn-default">Trở về</a>
            </div>
        </div>
    </div>
</div>
@endsection
