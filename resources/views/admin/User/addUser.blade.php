@extends('admin.layout')
@section('title', 'Quản lý tài khoản')

@section("content")
<div id="content-header">
    <div id="breadcrumb"> <a href="?page=dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
            Home</a> <a href="?page=QL-Phong" class="current">Quản Lí Nguời dùng</a> </div>
    <h1>Quản lí Nguời dùng</h1>

</div>
<!--End-breadcrumbs-->

<!--Action boxes-->
<div class="container-fluid">
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Table user</h5>
            <a href="/admin/user/add" class="btn btn-primary" style="float:right">Thêm người dùng</a>
        </div>
        <div class="widget-content">
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $err)
                {{$err}} <br>
                @endforeach
            </div>
            @endif
            @if(session('notification'))
            <div class="alert alert-success">
                {{session('notification')}}
            </div>
            @endif
            <form method="post" action="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                    <label>Tên tài khoản</label>
                    <input require type="text" name="userName" class="form-control" placeholder="Tên tài khoản">
                </div>
                <div class="form-group">
                    <label>Mật khẩu</label>
                    <input require type="text" name="password" class="form-control" placeholder="Mật khẩu">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input require type="email" name="email" class="form-control" placeholder="Email">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Thêm</button>
                    <a href="/admin/user" class="btn btn-default">Trở lại</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
