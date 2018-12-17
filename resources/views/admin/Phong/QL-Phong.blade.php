@extends('admin.layout')
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
            <h5 style="color:#41BE80">(*)Mỗi phòng tối đa 4 sinh viên</h5>
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
                        <th>Mã Phòng</th>
                        <th>Tên Phòng</th>
                        <th>Số Người </th>
                        <th>Trình Trạng Phòng</th>
                        <th>Chi Tiết</th>
                        <th>Sửa</th>
                        <th>Xóa</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($phongs as $phong)
                    <tr>
                        <td class="text-center">{{$phong->id}}</td>
                        <td class="text-center">{{$phong->tenphong}}</td>
                        <td class="text-center">{{$phong->songuoi}}</td>
                        <td class="text-center">{{$phong->tinhtrangphong==1?'Đầy':'Trống'}}</td>
                        <td class="text-center"> <a href="/admin/phong/xem/{{$phong->id}}">Xem</a></td>
                        <td class="text-center"> <a href="/admin/phong/sua-phong/{{$phong->id}}">Sửa</a></td>
                        <td class="text-center"> <a href="/admin/phong/xoa-phong/{{$phong->id}}" onclick='return deleteAction();'>Xóa</a></td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
