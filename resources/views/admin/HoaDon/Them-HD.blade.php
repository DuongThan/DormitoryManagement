@extends('admin.layout')
@section("content")


<div id="content-header">
    <div id="breadcrumb"> <a href="?page=dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
            Home</a> <a href="?page=Them-Sv" class="current">Thêm Hóa Đơn</a> </div>
    <h1>Thêm Hóa Đơn</h1>
</div>
<!--End-breadcrumbs-->

<!--Action boxes-->
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Thêm Hóa Đơn</h5>
                </div>
								@if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                    {{$err}} <br>
                    @endforeach
                </div>
                @endif
                @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
                @endif
                <div class="widget-content nopadding">
                    <form action="/admin/hoadon/postHoadon" method="post" class="form-horizontal">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="control-group">
                            <label class="control-label">Phòng</label>
                            <div class="controls">
                                <select name="idphong" class="span5">
                                    @foreach($phongs as $phong)
                                    <option value="{{$phong->id}}">{{$phong->tenphong}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Tháng Điện Nước</label>
                            <div class="controls">
                                <input type="month" name="thangghi" class="span5" value="" required />
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="submit" name="btnThemHD" class="btn btn-success">Thêm Hóa Đơn</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
