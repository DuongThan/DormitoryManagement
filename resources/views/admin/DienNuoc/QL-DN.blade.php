@extends('admin.layout')
@section("content")

<div id="content-header">
    <div id="breadcrumb"> <a href="/admin" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a
            href="?page=QL-Phong" class="current">Quản Lí Điện Nước</a> </div>
    <h1>Quản lí Điện Nước </h1>
    <!--Action boxes-->
    @if(session('thongbao'))
    <div class="alert alert-success">
        {{session('thongbao')}}
    </div>
    @endif
    <div class="container-fluid">
        <div class="widget-box">
            <div class="widget-title">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#tab1">Quản Lí Điện</a></li>
                    <li><a data-toggle="tab" href="#tab2">Quản Lí Nước</a></li>

                </ul>
            </div>
            <div class="widget-content tab-content">
                <div id="tab1" class="tab-pane active">
                    <!--  tab 1--->
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                            <h5>Table sinh viên</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered data-table">
                                <thead>
                                    <tr>
                                        <th>Tên Phòng</th>
                                        <th>Tháng Ghi Số</th>
                                        <th>Chỉ Số Đầu</th>
                                        <th>Chỉ Số Cuối</th>
                                        <th>Điện Năng TT</th>
                                        <th>Đơn Giá (đ)</th>
                                        <th>Thành Tiền (đ)</th>
                                        <th>Sửa</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($diens as $phongdiennuoc)
                                    <tr class='gradeU'>
                                        <td class="text-center">{{$phongdiennuoc->tenphong}}</td>
                                        <td class="text-center">{{$phongdiennuoc->thangghi}}</td>
                                        <td class="text-center">{{$phongdiennuoc->chisodau}}</td>
                                        <td class="text-center">{{$phongdiennuoc->chisocuoi}}</td>
                                        <td class="text-center">{{$phongdiennuoc->chisocuoi -
                                            $phongdiennuoc->chisodau}}</td>
                                        <td class="text-center">{{$phongdiennuoc->dongia}}</td>
                                        <td class="text-center">{{$phongdiennuoc->thanhtien}}</td>

                                        <td class="text-center"><a href='/admin/diennuoc/sua-dien-nuoc/{{$phongdiennuoc->id}}'>Sửa</a></td>
                                        <td class="text-center"><a href='/admin/diennuoc/xoa-dien-nuoc/{{$phongdiennuoc->id}}'
                                                onclick='return deleteAction();'>Xóa</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div> <!-- tab 1--->
                </div>
                <div id="tab2" class="tab-pane">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                            <h5>Table sinh viên</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered data-table">
                                <thead>
                                    <tr>
                                        <th>Tên Phòng</th>
                                        <th>Tháng Ghi Số</th>
                                        <th>Chỉ Số Đầu</th>
                                        <th>Chỉ Số Cuối</th>
                                        <th>m3 Tiêu Thụ</th>
                                        <th>Đơn Giá (đ)</th>
                                        <th>Thành Tiền (đ)</th>
                                        <th>Sửa</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($nuocs as $phongdiennuoc)
                                    <tr class='gradeU'>
                                        <td class="text-center">{{$phongdiennuoc->tenphong}}</td>
                                        <td class="text-center">{{$phongdiennuoc->thangghi}}</td>
                                        <td class="text-center">{{$phongdiennuoc->chisodau}}</td>
                                        <td class="text-center">{{$phongdiennuoc->chisocuoi}}</td>
                                        <td class="text-center">{{$phongdiennuoc->chisocuoi -
                                            $phongdiennuoc->chisodau}}</td>
                                        <td class="text-center">{{$phongdiennuoc->dongia}}</td>
                                        <td class="text-center">{{$phongdiennuoc->thanhtien}}</td>

                                        <td class="text-center"><a href='/admin/diennuoc/sua-dien-nuoc/{{$phongdiennuoc->id}}'>Sửa</a></td>
                                        <td class="text-center"><a href='/admin/diennuoc/xoa-dien-nuoc/{{$phongdiennuoc->id}}'
                                                onclick='return deleteAction();'>Xóa</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!--  widget-box --->
            </div>
        </div>
    </div>
</div>
@endsection
