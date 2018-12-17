@extends('admin.layout')
@section("content")

<div id="content-header">
    <div id="breadcrumb"> <a href="?page=dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
            Home</a> <a href="#" class="current">Thêm Sinh Viên</a> </div>
    <h1>Thêm sinh viên</h1>
</div>
<!--End-breadcrumbs-->
<!--Action boxes-->
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Thêm Sinh Viên</h5>
                </div>
                @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
                @endif
                <div class="widget-content nopadding">
                    <form action="/admin/sinhvien/postsinhvien" method="post" class="form-horizontal">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="control-group">
                            <label class="control-label">Mã Sinh Viên:</label>
                            <div class="controls">
                                <input type="text" name="id" class="span8" placeholder="Mã Sinh Viên" required />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Họ tên:</label>
                            <div class="controls">
                                <input type="text" name="hoten" class="span8" placeholder="Họ Tên" required />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Lớp</label>
                            <div class="controls">
                                <select name="idlop">
                                    @foreach($lops as $lop)
                                    <option value="{{$lop->id}}">{{$lop->tenlop}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Phòng</label>
                            <div class="controls">
                                <select name="idphong">
                                    @foreach($phongs as $phong)
                                    <option value="{{$phong->id}}">{{$phong->tenphong}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Quê quán</label>
                            <div class="controls">
                                <select name="noisinh">
                                    @foreach($tinhthanhs as $tinhthanh)
                                    <option value="{{$tinhthanh->id}}">{{$tinhthanh->tentinhthanh}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Ngày Sinh</label>
                            <div class="controls">
                                <input type="date" name="ngaysinh" class="span8" required />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Giới Tính</label>
                            <div class="controls">
                                <label>
                                    <input type="radio" name="gioitinh" value="Nam" checked="checked" />
                                    Nam</label>
                                <label>
                                    <input type="radio" name="gioitinh" value="Nữ" />
                                    Nữ</label>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Số điện thoại</label>
                            <div class="controls">
                                <input type="text" name="sodienthoai" class="span8" />
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success">Thêm</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
