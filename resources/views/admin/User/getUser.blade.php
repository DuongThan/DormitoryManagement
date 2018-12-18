@extends('admin.layout')
@section('title', 'Quản lý nguời dùng')

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
        <div class="widget-content nopadding">
            @if(session('thongbao'))
            <div class="alert alert-success">
                {{session('thongbao')}}
            </div>
            @endif
            <table class="table table-bordered data-table">
                <thead>
                    <tr>
                        <th class="text-center" style="width:30px">#</th>
                        <th>Tên tài khoản</th>
                        <th>Họ tên</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $item)
                    <tr>
                        <td class="text-center">{{$loop->iteration}}</td>
                        <td>{{$item->tentaikhoan}}</td>
                        <td>{{$item->hoten}}</td>
                        <td class="text-center"> <a href="/admin/user/edit/{{$item->tentaikhoan}}">Sửa</a></td>
                        <td class="text-center"> <a href="/admin/user/get/{{$item->tentaikhoan}}" onclick='return deleteAction();'>Xóa</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
