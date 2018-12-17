@extends('admin.layout')
@section("content")

<link rel="stylesheet" href="/css/uniform.css" />
<link rel="stylesheet" href="/css/select2.css" />

<div id="content-header">
    <div id="breadcrumb"> <a href="?page=dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
            Home</a> <a href="#" class="current">Quản Lí Sinh Viên</a> </div>
    <h1>Quản lí sinh viên</h1>
</div>
<!--End-breadcrumbs-->

<!--Action boxes-->
<div class="container-fluid">
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Table sinh viên</h5>
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
                        <th>Mã Sv</th>
                        <th>Họ Tên</th>
                        <th>Phòng</th>
                        <th>Lớp</th>
                        <th>Ngày sinh</th>
                        <th>Quê Quán</th>
                        <th>Giới Tính</th>
                        <th>Phone</th>
                        <th>Sửa</th>
                        <th>Xóa</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($sinhviens as $sinhvien)
                    <tr class='gradeU'>
                        <td class="text-center">{{$sinhvien->id}}</td>
                        <td>{{$sinhvien->hoten}}</td>
                        <td class="text-center">{{$sinhvien->tenphong}}</td>
                        <td class="text-center">{{$sinhvien->tenlop}}</td>
                        <td class="text-center">{{$sinhvien->ngaysinh}}</td>
                        <td>{{$sinhvien->tentinhthanh}}</td>
                        <td class="text-center">{{$sinhvien->gioitinh}}</td>
                        <td>{{$sinhvien->sodienthoai}}</td>
                        <td class="text-center"><a href='/admin/sinhvien/sua-sinh-vien/{{$sinhvien->id}}'>Sửa</a></td>
                        <td class="text-center"><a href='/admin/sinhvien/xoa-sinh-vien/{{$sinhvien->id}}' onclick='return deleteAction();'>Xóa</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
