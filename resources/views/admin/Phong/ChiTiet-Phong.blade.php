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
        </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Mã Sv</th>
                        <th>Họ Tên</th>
                        <th>Lớp</th>
                        <th>Ngày sinh</th>
                        <th>Quê Quán</th>
                        <th>Giới Tính</th>
                        <th>Phone</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($sinhviens as $sinhvien)
                    <tr>
                        <td>{{$sinhvien->id}}</td>
                        <td>{{$sinhvien->hoten}}</td>
                        <td>{{$sinhvien->tenlop}}</td>
                        <td>{{$sinhvien->ngaysinh}}</td>
                        <td>{{$sinhvien->tentinhthanh}}</td>
                        <td>{{$sinhvien->gioitinh}}</td>
                        <td>{{$sinhvien->sodienthoai}}</td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>


@endsection
