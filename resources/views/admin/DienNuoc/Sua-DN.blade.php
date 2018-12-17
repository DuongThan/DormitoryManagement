@extends('admin.layout')
@section("content")
<div id="content-header">
    <div id="breadcrumb"> <a href="?page=dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
            Home</a> <a href="#" class="current">Sửa Điện Nước</a> </div>
    <h1>Sửa Điện Nước</h1>
</div>
<!--End-breadcrumbs-->
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
<!--Action boxes-->
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Sửa Điện Nước</h5>
                </div>

                <form action="/admin/diennuoc/putphongdiennuoc/{{$phongdiennuoc->id}}" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="widget-box">
                        <div class="widget-title">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#tab1">Hóa Đơn</a></li>
                                <li><a data-toggle="tab" href="#tab2">Điện</a></li>
                                <li><a data-toggle="tab" href="#tab3">Nước</a></li>
                            </ul>
                        </div>
                        <div class="widget-content tab-content">
                            <div id="tab1" class="tab-pane active">
                                <label class="control-label" class="span5 text-center">Phòng</label>
                                <input class="span5" disabled value="{{$phong->tenphong}}">

                                <label class="control-label">Tháng Ghi Số</label>

                                <input type="month" disabled max="12" min="1" name="ThangGhiSo" class="span5 thang"
                                    value="{{$phongdiennuoc->thangghi}}" />
                                <br />
                            </div>

                            <div id="tab2" class="tab-pane">
                                <input type="number" name="ChiSoDauD" title="Chỉ Số Đầu" class="span8" placeholder="Chỉ Số Đầu"
                                    disabled value="{{$phongdien->chisodau}}" />
                                <input type="number" name="ChiSoCuoiD" class="span8" title="Chỉ Số Cuối" placeholder="Chỉ Số Cuối"
                                    required value="{{$phongdien->chisocuoi}}" />
                                <div class="control-group">
                                    <label class="control-label">Đơn Giá</label>
                                    <div class="controls">
                                        <select onchange="ChangeDongiaDien()" name="DonGiaDien" class="span2 DonGiaDien">
                                            @foreach($diens as $dien)
                                            <option {{$phongdien->iddien==$dien->id?'selected':''}} ngaycapnhat="{{$dien->ngaycapnhat}}"
                                                value="{{$dien->id}}">{{$dien->dongia}}</option>
                                            @endforeach
                                        </select>
                                        Ngày: <span id="NgayDonGiaD" class="date badge badge-info">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div id="tab3" class="tab-pane">
                                <input type="number" name="ChiSoDauN" class="span8" placeholder="Chỉ Số Đầu" title="Chỉ Số Đầu"
                                    disabled value="{{$phongnuoc->chisodau}}" />
                                <input type="number" name="ChiSoCuoiN" class="span8" title="Chỉ Số Cuối" placeholder="Chỉ Số Cuối"
                                    required value="{{$phongnuoc->chisocuoi}}" />
                                <div class="control-group">
                                    <label class="control-label">Đơn Giá</label>
                                    <div class="controls">
                                        <select onchange="ChangeDongiaNuoc()" name="DonGiaNuoc" class="span2 DonGiaNuoc">
                                            @foreach($nuocs as $nuoc)
                                            <option {{$phongnuoc->idnuoc==$nuoc->id?'selected':''}} ngaycapnhat="{{$nuoc->ngaycapnhat}}"
                                                value="{{$nuoc->id}}">{{$nuoc->dongia}}</option>
                                            @endforeach
                                        </select>
                                        Ngày: <span id="NgayDonGiaN" class="date badge badge-info"></span>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" name="btnSuaDN">Cập Nhật</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function ChangeDongiaNuoc() {
        var ngaycapnhat = $(".DonGiaNuoc :selected").attr('ngaycapnhat')
        $('#NgayDonGiaN').html(ngaycapnhat);
    }

    function ChangeDongiaDien() {
        var ngaycapnhat = $(".DonGiaDien :selected").attr('ngaycapnhat')
        $('#NgayDonGiaD').html(ngaycapnhat);
    }
    $(document).ready(function () {
        ChangeDongiaNuoc();
        ChangeDongiaDien();
    });

</script>
@endsection
