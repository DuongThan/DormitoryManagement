@extends('admin.layout')
@section('title', 'Quản lý slide ảnh')
@section("content")

<div id="content-header">
    <div id="breadcrumb"> <a href="?page=dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
            Home</a> <a href="?page=QL-Phong" class="current">Quản Lí Phòng</a> </div>
    <h1>Quản lí Phòng</h1>

</div>
<!--End-breadcrumbs-->

<!--Action boxes-->
<div class="container-fluid">
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Table phòng</h5>
            <a href="/admin/slideshow/add" class="btn btn-primary" style="float:right">Thêm slide</a>
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
                        <th>Thứ tự</th>
                        <th>Sửa</th>
                        <th>Xóa</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($slideshows as $slide)
                    <tr>
                        <td class="text-center">
                            <img style="height: 30px;" src="/upload/slide/{{$slide->hinhanh}}" alt="">
                        </td>
                        <td class="text-center">{{$slide->thutu}}</td>
                        <td class="text-center"> <a href="/admin/slideshow/edit/{{$slide->id}}">Sửa</a></td>
                        <td class="text-center"> <a href="/admin/slideshow/delete/{{$slide->id}}" onclick='return deleteAction();'>Xóa</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection