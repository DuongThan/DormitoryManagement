@extends('admin.layout')
@section("content")
<div id="content-header">
    <div id="breadcrumb"> <a href="?page=dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
            Home</a> <a href="?page=Them-Sv" class="current">Thêm Điện Nước</a> </div>
    <h1>Thêm Điện Nước</h1>
</div>
<!--End-breadcrumbs-->

<!--Action boxes-->
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Thêm Điện Nước</h5>
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
                <div class="widget-box">
                    <div class="widget-title">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab1">Hóa Đơn</a></li>
                            <li><a data-toggle="tab" href="#tab2">Điện</a></li>
                            <li><a data-toggle="tab" href="#tab3">Nước</a></li>
                        </ul>
                    </div>
                    <form action="/admin/diennuoc/postDiennuoc" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="widget-content tab-content">
                            <div id="tab1" class="tab-pane active">
                                <label class="control-label" class="span5 text-center">Phòng</label>
                                <select name="phong" class="span5 phong">
                                    @foreach($phongs as $phong)
                                      <option value="{{$phong->id}}">{{$phong->tenphong}}</option>
                                    @endforeach
                                </select>
                                <label class="control-label">Tháng Ghi Số</label>
                                <input type="month" required max="12" min="1" name="ThangGhiSo" class="span5 thang"
                                    value="" />
                            </div>

                            <div id="tab2" class="tab-pane">
                                <input type="number" name="ChiSoDauD" title="Chỉ Số Đầu" class="span8 csd" placeholder="Chỉ Số Đầu"
                                    required value="" />
                                <input type="number" name="ChiSoCuoiD" class="span8" title="Chỉ Số Cuối" placeholder="Chỉ Số Cuối"
                                    required value="" />
                            </div>
                            <div id="tab3" class="tab-pane">
                                <input type="number" name="ChiSoDauN" class="span8 csn" placeholder="Chỉ Số Đầu" title="Chỉ Số Đầu"
                                    required value="" />
                                <input type="number" name="ChiSoCuoiN" class="span8" title="Chỉ Số Cuối" placeholder="Chỉ Số Cuối"
                                    required />
                            </div>
                            <button class="btn btn-primary" name="btnThemDN">Thêm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
