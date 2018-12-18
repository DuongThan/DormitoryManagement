@extends('admin.layout')
@section('title', 'Quản lý bài viết')
@section("content")

<div id="content-header">
    <div id="breadcrumb"> <a href="?page=dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
            Home</a> <a href="?page=QL-Phong" class="current">Quản lý bài viết</a> </div>
    <h1>Quản lý bài viết</h1>

</div>
<!--End-breadcrumbs-->

<!--Action boxes-->
<div class="container-fluid">
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Table bài viết</h5>
            <a href="/admin/baiviet/them" class="btn btn-primary" style="float:right">Thêm bài viết</a>
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
                        <th>Hình ảnh</th>
                        <th>Tiêu đề</th>
                        <th>Danh mục</th>
                        <th>Tin nổi bật</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($baiviets as $baiviet)
                    <tr>
                        <td class="text-center">
                            <img style="height: 30px;" src="/upload/baiviet/{{$baiviet->hinhanh}}" alt="">
                        </td>
                        <td>{{$baiviet->tenbaiviet}}</td>
                        <td class="text-center">{{$baiviet->tendanhmuc}}</td>
                        <td class="text-center">{{$baiviet->tinoibat==1?'Hot':''}}</td>
                        <td class="text-center"> <a href="/admin/baiviet/sua/{{$baiviet->id}}">Sửa</a></td>
                        <td class="text-center"> <a href="/admin/baiviet/xoa/{{$baiviet->id}}" onclick='return deleteAction();'>Xóa</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection