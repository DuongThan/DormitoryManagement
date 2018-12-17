@extends('admin.layout')
@section("content")

<link rel="stylesheet" href="css/uniform.css" />
<link rel="stylesheet" href="css/select2.css" />

<div id="content-header">
    <div id="breadcrumb"> <a href="?page=dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
            Home</a> <a href="?page=QL-Sv" class="current">Quản Lí Hóa Đơn</a> </div>
    <h1>Quản lí Hóa Đơn</h1>
</div>
<!--End-breadcrumbs-->
<!--Action boxes-->
<div class="container-fluid">
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Table Hóa Đơn</h5>
        </div>
        @if(session('thongbao'))
        <div class="alert alert-success">
            {{session('thongbao')}}
        </div>
        @endif
        <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
                <thead>
                    <tr>
                        <th>Số Hóa Đơn</th>
                        <th>Tên Phòng </th>
                        <th>Tháng Ghi Số</th>
                        <th>Ngày Lập</th>
                        <th>Điện Năng Tiêu Thụ (đ)</th>
                        <th>m3 Tiêu Thụ (đ)</th>
                        <th>Tổng Tiền Điện Nước (đ)</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
										@foreach($hoadons as $hoadon)
                    <tr class='gradeU'>
                        <td class="text-center">{{$hoadon->sohoadon}}</td>
                        <td class="text-center">{{$hoadon->tenphong}}</td>
                        <td class="text-center">{{$hoadon->thangghi}}</td>
                        <td class="text-center">{{$hoadon->ngaylap}}</td>
                        <td class="text-center">{{$hoadon->tiendien}}</td>
                        <td class="text-center">{{$hoadon->tiennuoc}}</td>
                        <td class="text-center">{{$hoadon->tiendien+$hoadon->tiennuoc}}</td>
                        <td class="text-center"><a href='/admin/hoadon/xoa-hoa-don/{{$hoadon->sohoadon}}' onclick='return deleteAction();'>Xóa</a></td>
                    </tr>
										@endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
