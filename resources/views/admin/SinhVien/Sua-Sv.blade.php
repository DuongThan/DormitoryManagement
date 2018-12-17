@extends('admin.layout')
@section("content")

<div id="content-header">
    <div id="breadcrumb"> <a href="?page=dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
            Home</a> <a href="#" class="current">Sửa Sinh Viên</a> </div>
    <h1>Sửa sinh viên</h1>
</div>
<!--End-breadcrumbs-->
<!--Action boxes-->
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Sửa Sinh Viên</h5>
                </div>
                @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
                @endif
                <div class="widget-content nopadding">
                    <form action="/admin/sinhvien/putsinhvien/{{$sinhvien->id}}" method="post" class="form-horizontal">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="control-group">
                            <label class="control-label">Mã Sinh Viên:</label>
                            <div class="controls">
                                <label class="span8">{{$sinhvien->id}}</label>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Họ tên:</label>
                            <div class="controls">
                                <input type="text" name="hoten" class="span8" placeholder="Họ Tên" value="{{$sinhvien->hoten}}" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Lớp</label>
                            <div class="controls">
                                <select name="idlop">
                                    @foreach($lops as $lop)
                                    <option {{$sinhvien->idlop==$lop->id?"selected":""}} value="{{$lop->id}}">{{$lop->tenlop}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Phòng</label>
                            <div class="controls">
                                <select name="idphong">
                                    @foreach($phongs as $phong)
                                    <option {{$sinhvien->idphong==$phong->id?"selected":""}} value="{{$phong->id}}">{{$phong->tenphong}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Nơi Sinh</label>
                            <div class="controls">
                                <select name="noisinh">
                                    @foreach($tinhthanhs as $tinhthanh)
                                    <option {{$sinhvien->noisinh==$tinhthanh->id?"selected":""}} value="{{$tinhthanh->id}}">{{$tinhthanh->tentinhthanh}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Ngày Sinh</label>
                            <div class="controls">
                                <input type="date" name="ngaysinh" class="span8" value="{{$sinhvien->ngaysinh}}" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Giới Tính</label>
                            <div class="controls">
                                <label>
                                    <input type="radio" {{$sinhvien->gioitinh=='Nam'?'checked':''}} name="gioitinh"
                                        value="Nam" />
                                    Nam</label>
                                <label>
                                    <input type="radio" {{$sinhvien->gioitinh=='Nam'?'':'checked'}} name="gioitinh"
                                        value="Nữ" />
                                    Nữ</label>

                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Số điện thoại</label>
                            <div class="controls">
                                <input type="text" name="sodienthoai" class="span8" value="{{$sinhvien->sodienthoai}}" />

                            </div>

                            <div class="form-actions">
                                <button type="submit" class="btn btn-success">Sửa</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
